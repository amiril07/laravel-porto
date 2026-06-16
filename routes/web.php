<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Projects;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Muhammad Amiril Mukminin Azzaky'], ['title' => 'Halaman About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/project', function () {
    return view('project', ['title' => 'Projects']);
});

Route::get('/blog', function () {
    $category = request('category');
    $posts = $category ? Post::where('category', $category)->get() : Post::latest()->get();
    
    return view('blog', compact('posts'), ['title' => $category ? 'Category: ' . $category : 'Blogs']);
});

Route::get('/blog/{slug}', function ($slug) {
    $allPosts = Post::all();

    $post = Arr::first($allPosts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    if (!$post) {
        abort(404);
    }

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/profil', function () {
    $profile = Profile::first();

    return view('profil', [
        'title' => 'Profil',
        'profile' => $profile
    ]);
});

Route::get('/project', function () {
    return view('project', [
        'title' => 'Project',
        'projects' => Projects::latest()->get()
    ]);
});