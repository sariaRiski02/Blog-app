@extends('layouts.main')


@section('main')


<h1>All Authors</h1>


<div class="container">
    <div class="row">
        @foreach ($items as $item)
        
        <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
                
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://source.unsplash.com/500x500?random/people{{ $item->id }}" class="img-fluid rounded-start" alt="{{ $item->name }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="/posts?author={{ $item->username }}" class="text-decoration-none">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            </a>
                            <p class="card-text">
                                Penulis dengan nama pena {{ $item->username }}
                            </p>
                      <p class="card-text">
                        <small class="text-body-secondary">
                            Genre: Fiction, Poem, Politics
                        </small>
                      </p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>

        
        @endforeach
    </div>
</div>


@endsection