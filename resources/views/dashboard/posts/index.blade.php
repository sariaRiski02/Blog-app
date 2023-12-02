@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
</div>

@if (session()->has('success'))

<div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
    <strong>Yeeee..!</strong> {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    
@endif




<div class="table-responsive small col-lg-8">
  <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a>
    <table class="table table-striped table-sm" style="table-layout: fixeds">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($posts as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->title }}</td>
          <td>{{ $item->category->name }}</td>
          <td>
            <div class="d-flex gap-1 " style="width: 100%">
            <a href="/dashboard/posts/{{ $item->slug }}" class="btn btn-sm bg-primary">
                <i class="bi bi-eye-fill "></i>
            </a>
            <a href="/dashboard/posts/{{ $item->slug }}/edit" class="btn btn-sm bg-warning">
                <i class="bi bi-pencil"></i>
            </a>

            <form action="/dashboard/posts/{{ $item->slug }}" method="post">
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