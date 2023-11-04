
@extends('layouts/main')


@section('main')

<article class="mt-5">
    <h2>{{ $post['title'] }}</h2>
    <h5>by: {{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>
</article>
<a href="/posts" class="btn btn-primary btn-sm">Kembali</a>
    
@endsection