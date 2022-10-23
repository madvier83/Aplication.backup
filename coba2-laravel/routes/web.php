<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => 'About',

        'name' => 'Muhammad Advie Rifaldy',
        'email' => 'madvier83@gmail.com',
        'img' => 'pp.png'
    ]);
});
Route::get('/blog', function () {
    $posts = [
        [
            'title' => 'Judul post pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Muhammad Advie Rifaldy',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae animi vitae harum accusantium fugiat facilis perferendis similique, veritatis distinctio aperiam enim fuga magnam quaerat possimus aut deleniti eligendi iusto quis? Blanditiis, iusto! Similique, obcaecati omnis. Quibusdam voluptas vitae cum tempora, blanditiis esse expedita libero? Accusantium fugiat porro magni perferendis, est iure sapiente sequi rerum doloremque, quo quasi asperiores eaque provident ut officia odit quaerat tempore cum itaque velit aliquam modi facilis beatae laboriosam! Libero quibusdam consequuntur sapiente soluta a quis.'
        ],
        [
            'title' => 'Judul post kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Mochammad Ihsan Saepulloh',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae animi vitae harum accusantium fugiat facilis perferendis similique, veritatis distinctio aperiam enim fuga magnam quaerat possimus aut deleniti eligendi iusto quis? Blanditiis, iusto! Similique, obcaecati omnis. Quibusdam voluptas vitae cum tempora, blanditiis esse expedita libero? Accusantium fugiat porro magni perferendis, est iure sapiente sequi rerum doloremque, quo quasi asperiores eaque provident ut officia odit quaerat tempore cum itaque velit aliquam modi facilis beatae laboriosam! Libero quibusdam consequuntur sapiente soluta a quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia hic asperiores, nisi minus assumenda accusantium maiores similique? Modi sequi assumenda recusandae at voluptates cumque qui beatae consectetur? Blanditiis, dignissimos modi.'
        ]
    ];

    return view('posts', [
        'title' => 'Blog',
        'posts' => $posts
    ]);
});
Route::get('post/{slug}', function($slug){
    $post = [
        [
            'title' => 'Judul post pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Muhammad Advie Rifaldy',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae animi vitae harum accusantium fugiat facilis perferendis similique, veritatis distinctio aperiam enim fuga magnam quaerat possimus aut deleniti eligendi iusto quis? Blanditiis, iusto! Similique, obcaecati omnis. Quibusdam voluptas vitae cum tempora, blanditiis esse expedita libero? Accusantium fugiat porro magni perferendis, est iure sapiente sequi rerum doloremque, quo quasi asperiores eaque provident ut officia odit quaerat tempore cum itaque velit aliquam modi facilis beatae laboriosam! Libero quibusdam consequuntur sapiente soluta a quis.'
        ],
        [
            'title' => 'Judul post kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Mochammad Ihsan Saepulloh',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae animi vitae harum accusantium fugiat facilis perferendis similique, veritatis distinctio aperiam enim fuga magnam quaerat possimus aut deleniti eligendi iusto quis? Blanditiis, iusto! Similique, obcaecati omnis. Quibusdam voluptas vitae cum tempora, blanditiis esse expedita libero? Accusantium fugiat porro magni perferendis, est iure sapiente sequi rerum doloremque, quo quasi asperiores eaque provident ut officia odit quaerat tempore cum itaque velit aliquam modi facilis beatae laboriosam! Libero quibusdam consequuntur sapiente soluta a quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia hic asperiores, nisi minus assumenda accusantium maiores similique? Modi sequi assumenda recusandae at voluptates cumque qui beatae consectetur? Blanditiis, dignissimos modi.'
        ]
    ];
    $this_post = [];
    foreach($post as $p){
        if($p['slug'] == $slug){
            $this_post = $p;
        }
    }
    return view('post', [
        'title' => 'Blog',
        'post' => $this_post
    ]);
});
