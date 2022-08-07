<?php

namespace App\Models;



class post 
{
    private static $blog_posts = [
        [
            "title" => "judul pertama",
            "slug" => "judul-pertama",
            "author" => "by musthafa hanif",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nam voluptatum beatae, eveniet maiores distinctio ullam rem mollitia ratione aliquam sapiente! Commodi temporibus, facere doloremque laborum sequi in laboriosam provident?",

        ],
        [
            "title" => "judul kedua",
            "slug" => "judul-kedua",
            "author" => "by musthafa hanif",
            "body" => "lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nam voluptatum beatae, eveniet maiores distinctio ullam rem mollitia ratione aliquam sapiente! Commodi temporibus, facere doloremque laborum sequi in laboriosam provident?",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
