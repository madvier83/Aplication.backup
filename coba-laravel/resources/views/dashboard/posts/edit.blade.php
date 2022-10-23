@extends('dashboard.layouts.main')

@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>
<div class="col-md-8 mb-4">
    <form action="/dashboard/posts/{{ $post->slug }}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1" value="{{ old('title',$post->title) }}">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Slug</label>
            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="exampleInputEmail1"  value="{{ old('slug',$post->slug) }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category</label>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                    @if(old('category',$post->category_id) == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
              </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Body</label>
            <input id="body" type="hidden" name="body" value="{{ old('body',$post->body) }}">
            <trix-editor input="body"></trix-editor>
        </div>
        @error('body')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/createSlug?title='+title.value)
            .then(response->response.json())
            .then(data=>slug.value=data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });
</script>
@endsection