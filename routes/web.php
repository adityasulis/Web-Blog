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
        'name' => 'Aditya Sulistyo, S.Kom',
        'email' => 'aditya@gmail.com',
        'image' => 'aditya.jpg'
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi rerum voluptatibus nostrum labore facilis a distinctio, exercitationem non explicabo pariatur unde animi accusantium aliquam corporis molestias nobis reiciendis in quos totam fugiat. Delectus tempora nobis ad ullam provident veniam, hic sed iste neque laudantium maiores voluptatum doloribus natus deleniti amet dolorum impedit illo magnam doloremque esse consequatur placeat.Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Sequi rerum voluptatibus nostrum labore facilis a distinctio, exercitationem non explicabo pariatur unde animi accusantium aliquam corporis molestias nobis reiciendis in quos totam fugiat. Delectus tempora nobis ad ullam provident veniam, hic sed iste neque laudantium maiores voluptatum doloribus natus deleniti amet dolorum impedit illo magnam doloremque esse consequatur placeat. Corporis maiores ea nulla dolorem, excepturi impedit quia libero magni molestiae? Iusto, magnam quos quod repudiandae in nostrum optio sint molestiae ratione expedita numquam quia praesentium eaque laudantium recusandae sapiente ea est nemo nihil illum vel saepe quidem dolorum! Similique, culpa facilis?'
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [

        'title' => 'Single Post',
        'post' => $new_post
    ]);
});
