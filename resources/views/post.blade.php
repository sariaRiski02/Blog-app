
@extends('layouts/main')


@section('main')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1>{{ $post['title'] }}</h1>
                by: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }} </a> 
                in Category
                <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
                    {{ $post->category->name }}
                </a>
                <br>


                @if ($post->image)
                <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid" style="max-height: 800px; max-width: 1200; overflow:hidden;">
                @else
                <img src="https://source.unsplash.com/1200x800?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                @endif
            <article>{!! $post['body'] !!}</article>

        </div>
    </div>
</div>
    
@endsection