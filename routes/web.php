<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About Page'], ['nama' => 'Ibnu Zaman']);
});
Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog Page',
        'posts' => [
            [
                'id' => '1',
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'publish' => '17 November 2024',
                'author' => 'Ibnu Zaman',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum libero ab iste dolores consectetur quasi iusto nihil asperiores eaque inventore, earum aliquid possimus molestiae magni exercitationem, ut omnis sed beatae!'
            ],
            [
                'id' => '2',
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'publish' => '22 November 2024',
                'author' => 'Author 2',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum libero ab iste dolores consectetur quasi iusto nihil asperiores eaque inventore, earum aliquid possimus molestiae magni exercitationem, ut omnis sed beatae!'
            ]
        ]
    ]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

Route::get('/post/{slug}', function ($slug) {
    $posts = [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'publish' => '17 November 2024',
            'author' => 'Ibnu Zaman',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum libero ab iste dolores consectetur quasi iusto nihil asperiores eaque inventore, earum aliquid possimus molestiae magni exercitationem, ut omnis sed beatae!'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'publish' => '22 November 2024',
            'author' => 'Author 2',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum libero ab iste dolores consectetur quasi iusto nihil asperiores eaque inventore, earum aliquid possimus molestiae magni exercitationem, ut omnis sed beatae!'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    // dd($post);

    return view('post', ['title' => 'Detail Post', 'post' => $post]);
});
