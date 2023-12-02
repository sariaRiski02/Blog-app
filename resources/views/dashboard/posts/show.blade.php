@extends('dashboard.layouts.main')

@section('container')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <h1>{{ $post['title'] }}</h1>
            <a href="/dashboard/posts" class="btn btn-sm btn-success"><i class="bi bi-arrow-left"></i> Back to all posts</a>

            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>

            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
  
                @csrf
                <button  class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this post ?')" type="submit">
                    <i class="bi bi-trash"></i> Delete
                </button>
            </form>

            <br>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
        <article>{!! $post['body'] !!}</article>
        <a href="/posts" class="btn btn-primary btn-sm" class="full-width">Kembali</a>

    </div>
</div>

@endsection