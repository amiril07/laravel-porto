<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profil')->insert([
            [
                'nama' => 'Muhammad Amiril Mukminin Azzaky',
                'email' => 'amiril@gmail.com',
                'bio' => 'Full-stack Web Developer and tech enthusiast.',
                'phone' => '081234567890',
                'address' => 'Bangka Belitung, Indonesia',
                'avatar' => 'profil.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}