
@extends('layouts/main')
    
@section('main')
<h1 class="mb-3">Post Category : {{ $category }}</h1>

    <div class="row sm">
        @foreach ( $posts  as $item)
        <div class="col-6 pb-5">
            <div class="card">
                <div class="card-header">
                {{ $item->category->name }} 
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{ $item['title'] }}</h5>
                  <p>By : {{ $item['author'] }}</p>
                  <p class="card-text">{{  $item['excerpt'] }}</p>
                  <a href="/posts/{{ $item['slug'] }}" class="btn btn-danger">Mulai Baca</a>
                </div>
            </div>    
        </div>
        @endforeach  
        <a href="/categories" class="btn btn-success btn-sm">Lihat Semua Kategori</a> 
    </div>

@endsection