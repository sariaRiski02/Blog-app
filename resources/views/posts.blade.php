
@extends('layouts/main')
    
@section('main')
<h1 class="mb-3">Sekumpulan Tulisan Aneh</h1>

    <div class="row">

        @foreach ( $posts  as $item)
        
        <div class="col">
            <div class="card">
                <div class="card-header">
                {{ $item['genre'] }} 
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{ $item['title'] }}</h5>
                  <p>By : {{ $item['author'] }}</p>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="/posts/{{ $item['slug'] }}" class="btn btn-danger">Mulai Baca</a>
                </div>
            </div>    
        </div>

        @endforeach


        
    </div>

@endsection