@extends('layouts/main')
    
@section('main')

<h1 class="text-center">{{ $main_title }}</h1>

<div class="row justify-content-center mt-3">
    <div class="col-md-6">

        <form action="/posts" method="get">

            

            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif

            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
        
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search"  value="{{ request('search') }}">
                <button class="btn btn-dark" type="submit">Search</button>
            </div>

        </form>

    </div>
</div>

@if ($posts->count())


<div class="card mb-10 d-flex align-items-center" >

            @if ($posts->first()->image)

            <div style="max-height: 400px; max-width: 1200px; overflow: hidden;">
                <img src="{{ asset('storage/'.$posts->first()->image) }}" alt="{{ $posts->first()->category->name }}" class="img-fluid">

            </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts->first()->category->name }}" alt="{{ $posts->first()->category->name }}" class="img-fluid" >
            @endif

    <div class="card-body text-center">
      <a href="/posts/{{ $posts->first()->slug }}" class="text-decoration-none text-dark">
        <h5 class="card-title">{{ $posts->first()->title }}</h5>
      </a>
      <h6 class="text-body-secondary"> 
        by: 
        <a href="/posts?author={{ $posts->first()->author->username }}" class="text-decoration-none">
            {{ $posts->first()->author->name }}
        </a> in category
        <a href="/posts?category={{ $posts->first()->category->slug }}" class="text-decoration-none">
            {{ $posts->first()->category->name }}
        </a> 
        {{ $posts->first()->created_at->diffForHumans()}}
        
      </h6>
      <p class="card-text">
        {{ $posts->first()->excerpt }}
     </p>
     <a href="/posts/{{ $posts->first()->slug }}" class="btn btn-primary">Read more</a>
    </div>
</div>


<div class="container pt-3">
    <div class="row">

    @foreach ($posts->skip(1) as $item)
    
        <div class="col-md-4 pb-3">

            <div class="card">
                <div class="position-absolute px-1 py-1 " style="background-color: rgba(0,0,0,0.5)">
                    <a href="/posts?category={{ $item->category->slug }}" class="text-decoration-none text-white">
                        {{ $item->category->name }}
                    </a>
                </div>

            @if ($item->image)
                <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->category->name }}" class="img-fluid" >
            @else
                <img src="https://source.unsplash.com/1200x800?{{ $item->category->name }}" alt="{{ $item->category->name }}" class="img-fluid">
            @endif

            <div class="card-body">    

                    <h5 class="card-title">{{ $item->title }}</h5>
                    <small class="text-muted">
                        by: 
                        <a href="/posts?author={{ $item->author->username }}" class="text-decoration-none "> 
                            {{ $item->author->name }} 
                        </a> 
                        <br>
                        {{ $item->created_at->diffForHumans() }}
                    </small>
                    <p class="card-text fs-6">{{ $item->excerpt }}</p>
                    <a href="/posts/{{ $item->slug }}" class="btn btn-primary">Read more</a> 

            </div>
            </div>
        </div>

    @endforeach

    </div>
</div>

@else

<p class="text-center fs-4">
    Posts not found
</p>
    
@endif

<div class="container mb-4 ">
    {{ $posts->links() }}

</div>

@endsection