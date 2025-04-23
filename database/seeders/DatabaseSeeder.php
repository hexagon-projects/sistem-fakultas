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
                'name' => 'Kemal Ramadhan',
                'email' => 'km.kemal03@gmail.com',
                'phone' => '08986004677',
                'role' => 'Super Admin',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
              
                'created_at' => now(),
                'updated_at' => now(),
            ],
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
    }
}
