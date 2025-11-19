<?php

use App\Models\Posts;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/blog', function () {
    $posts = Posts::all();
    return view('posts', ['title' => 'Blog Pages'], ['posts' => $posts]);
});

Route::get('/blog/{posts}', function (Posts $posts) {
    return view('posts', ['posts' => $posts]);
});

Route::get('about', function () {
    return view('about', ['title' => 'About Us']);
});
Route::get('contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});
