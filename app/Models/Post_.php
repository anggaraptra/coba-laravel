<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Anggara",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit molestias tempora voluptatum pariatur vitae illo asperiores necessitatibus, eius in cumque officia deserunt libero iusto cupiditate dolor ea praesentium modi quam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Putra",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit molestias tempora voluptatum pariatur vitae illo asperiores necessitatibus, eius in cumque officia deserunt libero iusto cupiditate dolor ea praesentium modi quam."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
