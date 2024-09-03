<?php

use App\Models\Posts;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About'], ['nama' => 'Ibnu Zaman']);
});
Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => Posts::all()
    ]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/post/{post:slug}', function (Posts $post) {


    // $post = Arr::first(Posts::all(), function ($post) use ($slug) {
    //     return $post['slug'] == $slug;
    // });

    // $post = collect(Posts::all())->firstWhere('slug', $slug);

    return view('post', ['title' => 'Detail Post', 'post' => $post]);
});
