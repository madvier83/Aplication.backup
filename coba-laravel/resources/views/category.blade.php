@extends('layouts/main')

@section('container')
    <h1>Category : {{ $category }}</h1>
    @foreach ($posts as $post)
    <article class="mb-5">
        <h2>
            <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        {{-- <h3>By: {{ $post['author'] }}</h3> --}}
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach
    
    <a href="/categories">Categories</a>,
    <a href="/blog">Back</a>
@endsection