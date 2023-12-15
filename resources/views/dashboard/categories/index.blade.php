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

<form method="post" action="/dashboard/categories/@if(isset($category)){{$category->slug }}   @endif">
  @if (isset($category))
  @method('put') 
  @endif
  @csrf
    <div class="mb-2 mx-3">
      <label for="NewCategory" class="form-label">
        @if (isset($category))
            Edit category
        @else
        New Category
        @endif
      </label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="NewCategory" name="name" autofocus value="@if(isset($category)){{old('name', $category->name)}}@endif{{old('name')}}">
      
      
      @error('name') 
      <div class="form-text invalid-feedback">{{ $message }}</div>
      @enderror

    </div>

    <div class="mb-2 m-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly 
      value="@if(isset($category)){{ old('slug',$category->slug) }}@endif{{ old('slug') }}">
      @error('slug') 
    
      <div class="form-text invalid-feedback">{{ $message }}</div>
      
      @enderror
    </div>
    
    <button type="submit" class="btn btn-success mb-4 mx-3">
      @if(isset($category))
      Update
      @else
      Add
      @endif
    </button>

    @if(isset($category))
    <a href="/dashboard/categories" class="btn btn-warning mb-4 mx-3">Come back to Add Category</a>
    @endif
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
            <a href="/posts/?category={{ $item->slug }}" class="btn btn-sm bg-primary">
                <i class="bi bi-eye-fill "></i>
            </a>

            <a href="/dashboard/categories/{{ $item->slug }}/edit" class="btn btn-sm bg-warning">
                <i class="bi bi-pencil"></i>
            </a>

            <form action="/dashboard/categories/{{ $item->slug }}" method="post">
              @method('delete')
              @csrf
              <button  class="btn btn-sm bg-danger" onclick="return confirm('Are you sure to delete this category ?')" >
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




  <script>
    const NewCategory = document.querySelector('#NewCategory');
    const slug = document.querySelector('#slug');

    NewCategory.addEventListener('change', function(){
      fetch('/dashboard/categories/checkSlug?category='+ NewCategory.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
    });

  </script>
@endsection
