
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
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            <article>{!! $post['body'] !!}</article>
            <a href="/posts" class="btn btn-primary btn-sm" class="full-width">Kembali</a>

        </div>
    </div>
</div>
    
@endsection