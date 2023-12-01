@extends('dashboard.layouts.main')

@section('container')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <h1>{{ $post['title'] }}</h1>
            <a href="/dashboard/posts" class="btn btn-sm btn-success"><i class="bi bi-arrow-left"></i> Back to all posts</a>
            <a href="/dashboard/posts" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
            <a href="/dashboard/posts" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</a>
            <br>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
        <article>{!! $post['body'] !!}</article>
        <a href="/posts" class="btn btn-primary btn-sm" class="full-width">Kembali</a>

    </div>
</div>

@endsection