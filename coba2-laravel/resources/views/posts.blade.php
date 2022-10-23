@extends('layouts/main')

@section('main')
    <h1>Halaman Posts</h1>
    @foreach ($posts as $post)
        <h3>
            <a href="post/{{ $post['slug'] }}">{{ $post['title'] }}</a>
        </h3>
        <h5>{{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    @endforeach
@endsection