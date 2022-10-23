@extends('layouts/main')

@section('container')
    <h1>Ini halaman about</h1>
    <h3>{{ $name }}</h3>
    <P>{{ $email }}</P>
    <img src="img/{{ $img }}" alt="" width="200px" class="img-thumbnail rounded-circle">
@endsection