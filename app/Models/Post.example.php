<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'First time learning Laravel',
            'slug' => 'first-time-learning-laravel',
            'author' => 'Aditya Sulistyo',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi rerum voluptatibus nostrum labore facilis a distinctio, exercitationem non explicabo pariatur unde animi accusantium aliquam corporis molestias nobis reiciendis in quos totam fugiat. Delectus tempora nobis ad ullam provident veniam, hic sed iste neque laudantium maiores voluptatum doloribus natus deleniti amet dolorum impedit illo magnam doloremque esse consequatur placeat. Corporis maiores ea nulla dolorem, excepturi impedit quia libero magni molestiae? Iusto, magnam quos quod repudiandae in nostrum optio sint molestiae ratione expedita numquam quia praesentium eaque laudantium recusandae sapiente ea est nemo nihil illum vel saepe quidem dolorum! Similique, culpa facilis?'
        ],

        [
            'title' => "Is Giorno Giovana Joseph's Uncle",
            'slug' => "is-giorno-giovana-joseph's-uncle",
            'author' => 'Aditya Sulistyo',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi rerum voluptatibus nostrum labore facilis a distinctio, exercitationem non explicabo pariatur unde animi accusantium aliquam corporis molestias nobis reiciendis in quos totam fugiat. Delectus tempora nobis ad ullam provident veniam, hic sed iste neque laudantium maiores voluptatum doloribus natus deleniti amet dolorum impedit illo magnam doloremque esse consequatur placeat.'
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
