@extends('layouts/main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>
                    {{ $post->title }}
                </h2>
                <h3>By: {{ $post->author->name }}</h3>
                <small">Category : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></small><br>
                
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top my-3" alt="...">

                <article class="text-justify fs-5">{!! $post->body !!}</article>
                <a href="/blog">Back</a>
            </div>
        </div>
    </div>

@endsection

{{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ullam illum ea possimus, dolorum repudiandae, quaerat inventore quia ex voluptates dolorem? Odio nam ea rerum quos vitae illum dolor officia soluta, tempore nihil dolorum, nesciunt temporibus vero, laboriosam vel ipsa. Quos, maiores assumenda beatae temporibus voluptatum quis consectetur quaerat laudantium voluptas aspernatur excepturi magni cupiditate eum modi culpa iusto quasi nihil dolorem,</p>
 
<p>itaque repellendus magnam. Molestiae autem aliquid sunt animi, quas distinctio amet vel voluptatem eos corrupti pariatur voluptas molestias officiis architecto provident explicabo magnam hic nisi, doloremque cumque blanditiis, laudantium reiciendis ullam. Autem accusamus voluptate sequi illo ratione fugiat odit cumque eligendi impedit. Pariatur ut, saepe iure voluptatibus consequatur animi? Hic ratione aut cupiditate eius fuga omnis iusto ipsum.</p> --}}

{{-- 
    Post::create([
        'title' => 'Judul Pertama',
        'category_id' => 2,
        'slug' => 'judul-ke-satu',
        'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ullam illum ea possimus, dolorum repudiandae, quaerat inventore quia ex voluptates dolorem?',
        'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ullam illum ea possimus, dolorum repudiandae, quaerat inventore quia ex voluptates dolorem? Odio nam ea rerum quos vitae illum dolor officia soluta, tempore nihil dolorum, nesciunt temporibus vero, laboriosam vel ipsa. Quos, maiores assumenda beatae temporibus voluptatum quis consectetur quaerat laudantium voluptas aspernatur excepturi magni cupiditate eum modi culpa iusto quasi nihil dolorem,</p><p>itaque repellendus magnam. Molestiae autem aliquid sunt animi, quas distinctio amet vel voluptatem eos corrupti pariatur voluptas molestias officiis architecto provident explicabo magnam hic nisi, doloremque cumque blanditiis, laudantium reiciendis ullam. Autem accusamus voluptate sequi illo ratione fugiat odit cumque eligendi impedit. Pariatur ut, saepe iure voluptatibus consequatur animi? Hic ratione aut cupiditate eius fuga omnis iusto ipsum.</p><p>itaque repellendus magnam. Molestiae autem aliquid sunt animi, quas distinctio amet vel voluptatem eos corrupti pariatur voluptas molestias officiis architecto provident explicabo magnam hic nisi, doloremque cumque blanditiis, laudantium reiciendis ullam. Autem accusamus voluptate sequi illo ratione fugiat odit cumque eligendi impedit. Pariatur ut, saepe iure voluptatibus consequatur animi? Hic ratione aut cupiditate eius fuga omnis iusto ipsum.</p>'
])
 --}}