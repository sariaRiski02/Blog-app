

@extends('layouts/main')

@section('main')
    <h1>{{ $title }}</h1>
    <h4>{{ $name }}</h4>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" width="200px" alt="photo profile">

@endsection
