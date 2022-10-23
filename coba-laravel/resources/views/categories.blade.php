@extends('layouts/main')

@section('container')
<div class="container">
    <div class="row">
        @foreach ($categories as $post)
        <div class="col-md-4">
            <a href="/blog?category={{ $post->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x400?{{ $post->name }}" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h4 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, .5)">{{ $post->name }}</h4>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

{{-- <article class="mb-5">
    <ul>
        @foreach ($categories as $post)
        
        <li>
            <a href="/categories/{{ $post->slug }}">{{ $post->name }}</a>

        </li>
        @endforeach
    </ul> --}}
@endsection