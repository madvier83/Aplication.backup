@extends('layouts/main')

@section('main')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $img }}" alt="" width="200px">
@endsection