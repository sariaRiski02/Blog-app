
@extends('layouts/main')
    
@section('main')
<h1 class="mb-3">Sekumpulan Tulisan Aneh</h1>

    <div class="row mb-5">
        @foreach ( $posts  as $item)
        <div class=" sm pb-3">
            <div class="card">
                <div class="card-header">
                {{ $item->category->name }}
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{ $item['title'] }}</h5>
                  <p>By : {{ $item['author'] }} <br>
                    Category: <a href="/categories/{{ $item->category->slug }}">{{ $item->category->name }}</a>
                </p>
                  <p class="card-text">{{  $item['excerpt'] }}</p>
                  <a href="/posts/{{ $item['slug'] }}" class="btn btn-danger">Mulai Baca</a>
                </div>
            </div>    
        </div>
        @endforeach
        <a href="/categories" class="btn btn-success btn-sm m-auto" style="width: 95%">Lihat Semua Kategori</a> 


        
    </div>

@endsection