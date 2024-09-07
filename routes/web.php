<?php

use App\Models\Post;
use App\Models\User;
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
        'posts' => Post::all(),
    ]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/post/{post:slug}', function (Post $post) {


    // $post = Arr::first(Posts::all(), function ($post) use ($slug) {
    //     return $post['slug'] == $slug;
    // });

    // $post = collect(Posts::all())->firstWhere('slug', $slug);

    return view('post', ['title' => 'Detail Post', 'post' => $post]);
});

Route::get('/author/{user}', function (User $user) {
    return view('posts', ['title' => 'Artikel by ' . $user->name, 'posts' => $user->posts]);
});
