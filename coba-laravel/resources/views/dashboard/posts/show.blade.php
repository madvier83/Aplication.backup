@extends('dashboard.layouts.main')

@section('main')

    <div class="col-lg-8 pb-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            <h1 class="h2">{{ $post->title }}</h1>
        </div>
        
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn bg-success text-light">Back <span data-feather="arrow-left"></span></a>
        <a href="/dashboard/posts/{{ $post->id }}" class="btn bg-warning text-light">Update <span data-feather="edit"></span></a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" onclick="return confirm('Remove this data?');" class=" btn btn-danger text-light display-inline">Delete <span data-feather="x-circle"></span></button>
        </form>
                 
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top my-3" alt="...">

        <article class="text-justify fs-5">{!! $post->body !!}</article>
        <a href="/dashboard/posts">Back</a>
    </div>
@endsection