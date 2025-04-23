<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SideBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('side_baners')->insert([
                'id_departement' => 2,
                'title' => 'Contoh Judul Pertama',
                'description' => 'Ini adalah deskripsi panjang untuk item pertama. Bisa berisi teks panjang dengan berbagai informasi.',
                'image1' => 'image1.jpg',
                'image2' => 'image2.jpg',
                'yt' => 'https://youtube.com/watch?v=contohvideo1',
                'status' => 'active',
                'home' => 'yes'

        ]);
    }
}
