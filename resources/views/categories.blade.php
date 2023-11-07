@extends('layouts.main')


@section('main')
    
<ul class="list-group mb-5">
    @foreach ($categories as $item)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="categories/{{ $item->slug }}" class="btn ">{{ $item->name }}</a>
        <span class="badge bg-danger rounded-pill">
            {{ $item->posts->count() }}
        </span>
        </li>    
    @endforeach
</ul>
<a href="/posts" class="btn btn-primary btn-sm" style="width: 100%">Lihat semua Posts</a> 

@endsection