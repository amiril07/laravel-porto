<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Muhammad Amiril Mukminin Azzaky']);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/project', function () {
    return view('project');
});

