<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
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

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // foreach(self::$blog_posts as $post){
        //     if($post['slug'] == $slug)
        //     $new_post = $post;
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
