

@extends('layouts.main')


@section('main')
  

<div class="container">
    <div class="row">
        @foreach ($items as $item)
        <div class="col-md-4 mb-3">
            <a href="/posts?category={{ $item->slug }}">
                <div class="card text-bg-dark">

                    <img src="https://source.unsplash.com/500x500?{{$item->name}}" class="card-img" alt="{{$item->name}}">
                    <div class="card-img-overlay ">
                    <h5 class="card-title">
                        {{ $item->name }}
                    </h5>
                    </div>

                </div>
            </a>
        </div>  
        @endforeach
    </div>
</div>



{{-- 
<ul class="list-group mb-5">
    @foreach ($items as $item)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="{{ $Route }}{{ $item->slug }}" class="btn ">{{ $item->name }}</a>
        <span class="badge bg-danger rounded-pill">
            {{ $item->posts->count() }}
        </span>
        </li>    
    @endforeach
</ul> --}}
<a href="/posts" class="btn btn-primary btn-sm" style="width: 100%">Lihat semua Posts</a> 

@endsection