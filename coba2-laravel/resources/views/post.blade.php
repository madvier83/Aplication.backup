@extends('layouts/main')

@section('main')
    <h2>Halaman Detail Posts</h2>
        <h3>
            <a href="post/{{ $post['slug'] }}">{{ $post['title'] }}</a>
        </h3>
        <h5>{{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>

        <a href="/blog">Back</a>
@endsection