<?php

namespace Database\Seeders;

use App\Models\Identity;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IdentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Identity::create([
            'title' => 'Universitas Pasundan',
            'meta' => 'Universitas Pasundan (UNPAS) - Perguruan Tinggi Swasta terkemuka di Bandung, Jawa Barat, yang menyediakan berbagai program studi berkualitas untuk jenjang Diploma, Sarjana, Magister, dan Doktor.',
            'adress' => '(Kampus I) Jl. Lengkong besar no 68, Kec Lengkong Kota Bandung Jawa Barat 40261',
            'link_map' => 'https://maps.app.goo.gl/K4ZfK6MNnNN2NuRq7',
            'phone' => '62811960193',
            'email' => 'konsultasi@jatidiri.app',
            'fb' => 'unpas',
            'ig' => 'unpas',
            'tiktok' => '@unpas',
            'yt' => '@unpas',
            'time_service' => '08.00 - 17.00',
            'day_service' => 'Senin - Jumat',
            'image1' => 'image/sdjnajdn', // kalau belum ada gambar
            'image2' => 'image/sdjnajdn', // kalau belum ada gambar
        ]);
    }
}
