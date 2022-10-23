@extends('layouts/main')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $title }}</h1>
            </div>
            <div class="col-md-4">
                <form action="/blog/" method="GET">
                    @if(request('category'))
                        <input type="hidden" value="{{ request('category') }}" name="category">
                    @endif
                    @if(request('author'))
                        <input type="hidden" value="{{ request('author') }}" name="author">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="search..." name="search" value="{{ request('search') }}">
                        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Search</button>
                      </div>
                </form>
            </div>
        </div>
    </div>

    @if($posts->count())
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x300?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
            <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark"><h2 class="card-title">{{ $posts[0]->title }}</h2></a>

            <b>By:<a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none"> {{ $posts[0]->author->name }}</a></b> | <small>Category : <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a></small> | <small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small>

            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            
            <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            <p class="card-text"></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            
        @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute">
                        <div class="p text-light bg-dark px-2 py-1">
                            <small><a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></small>
                        </div>
                    </div>
                    <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <b>By:<a href="/blog?author={{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }}</a></b> | <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>   
            
            @endforeach
        </div>
    </div>

    @else
    <p class="text-center fs-4">So empty . . .</p>
    @endif

    {{ $posts->links() }}

    {{-- <article class="mb-5 pb-4 border-bottom">
        <h2><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
        
        <b>By:<a href="/author/{{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }}</a> | </b>
        <small>Category : <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></small>

        <p>{{ $post->excerpt }}</p>
        <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read more ...</a>
    </article> --}}

@endsection