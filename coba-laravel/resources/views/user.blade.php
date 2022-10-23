@extends('layouts/main')

@section('container')
    <h1>User posts</h1>
    @foreach ($posts as $post)
    <article class="mb-5 pb-4 border-bottom">
        <h2>
            <a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
        </h2>
        
        <b>By:<a href="/blog?author={{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }}</a> | </b>
        <small>Category : <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></small>
        {{-- <h3>By: {{ $post['author'] }}</h3> --}}
        <p>{{ $post->excerpt }}</p>
        <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read more ...</a>
    </article>
    @endforeach
@endsection