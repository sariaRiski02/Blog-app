
@extends('layouts/main')


@section('main')

<article class="mt-5">
    <h2>{{ $post['title'] }}</h2>
    <h5>by: {{ $post['author'] }}</h5>
    <h6>Category : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
    <p>{!! $post['body'] !!}</p>
</article>
<a href="/posts" class="btn btn-primary btn-sm">Kembali</a>
    
@endsection