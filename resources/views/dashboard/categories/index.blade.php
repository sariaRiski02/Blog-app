@extends('dashboard.layouts.main')
@section('container')






<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Posts Categories</h1>
</div>

@if (session()->has('message'))

<div class="alert alert-{{ session('feedback') }} alert-dismissible fade show col-lg-6" role="alert">
    <strong>{{ session('mainText')}}!</strong> {{ session('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<div class="table-responsive small col-lg-6">
  <button class="btn create btn-primary mb-3 m-1" onclick="showInput()">Create new category</button>


<form action="/dashboard/categories" method="post">
  @csrf
  <div class="input-group mb-3 addCategory d-none">
    <input type="text" class="form-control m-1" placeholder="Input Category" name="addCategory">
    <button class="btn btn-outline-secondary m-1"  type="submit" id="button-addon2">Add</button>
  </div>

</form>

    <table class="table table-striped table-sm" style="table-layout: fixeds">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($categories as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->name }}</td>
          <td>
            <div class="d-flex gap-1 " style="width: 100%">
            <a href="/dashboard/categories/{{ $item->slug }}" class="btn btn-sm bg-primary">
                <i class="bi bi-eye-fill "></i>
            </a>
            <a href="/dashboard/categories/{{ $item->slug }}/edit" class="btn btn-sm bg-warning">
                <i class="bi bi-pencil"></i>
            </a>

            <form action="/dashboard/categories/{{ $item->slug }}" method="post">
              @method('delete')

              @csrf
              <button  class="btn btn-sm bg-danger" onclick="return confirm('Are you sure to delete this post ?')" type="submit">
                  <i class="bi bi-trash col-1"></i>
              </button>
            
            </form>
          </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
