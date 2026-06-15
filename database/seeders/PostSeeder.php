<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            ['title' => 'Belajar Laravel 11 untuk Pemula', 'slug' => 'belajar-laravel-11-untuk-pemula', 'author' => 'Muhammad Amiril', 'body'=>'lorem ipsun', 'category' => 'Programming', 'published_at' => '2026-06-15'],
            ['title' => 'Resep Nasi Goreng Spesial', 'slug' => 'resep-nasi-goreng', 'author' => 'Abimanyu','body'=>'Hello World', 'category' => 'Kuliner', 'published_at' => '2026-06-16'],
            ['title' => 'Review Laptop M3 Terbaru', 'slug' => 'review-laptop-m3-terbaru', 'author' => 'David','body'=>'Hello World', 'category' => 'Teknologi', 'published_at' => '2026-06-17'],
            ['title' => 'Tips Liburan Murah ke Bali', 'slug' => 'tips-liburan-murah-ke-bali', 'author' => 'Amiril', 'body'=>'Lorem ipsum' , 'category' => 'Travel', 'published_at' => '2026-06-18'],
            ['title' => 'Manfaat Olahraga Pagi', 'slug' => 'manfaat-olahraga-pagi', 'author' => 'Hawari', 'body'=>'Olahraga itu sehat', 'category' => 'Kesehatan', 'published_at' => '2026-06-19']
        ];

        foreach($posts as $post) {
            Post::updateOrcreate(
                ['slug' => $post['slug']], $post); 
        }        
    }
}