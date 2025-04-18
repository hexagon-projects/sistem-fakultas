<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'phone' => '08123456789',
                'role' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // pastikan password di-hash
               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@example.com',
                'phone' => '08987654321',
                'role' => 'user',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
              
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
       
        DB::table('faq_categories')->insert([
            ['id' => 1, 'name' => 'Laravel'],
            ['id' => 2, 'name' => 'Quill Editor'],
        ]);

        DB::table('posts')->insert([
            [
                'id_category' => 1,
                'title' => 'Cara Menggunakan Laravel',
                'resume' => 'Panduan singkat cara menggunakan Laravel.',
                'content' => '<p>Laravel adalah framework PHP yang sangat powerful...</p>',
                'publish' => 'yes',
                'image' => 'images/posts/post1.jpg',
                'yt' => 'https://www.youtube.com/watch?v=video1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_category' => 2,
                'title' => 'Tips Belajar Quill Editor',
                'resume' => 'Cara integrasi Quill Editor di Laravel.',
                'content' => '<p>Quill adalah rich text editor yang ringan dan mudah digunakan...</p>',
                'publish' => 'no',
                'image' => 'images/posts/post2.jpg',
                'yt' => 'https://www.youtube.com/watch?v=video2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
          
        ]);
    }
}
