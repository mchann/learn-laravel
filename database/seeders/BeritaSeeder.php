<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('berita')->insert([
            [
                'judul' => 'Ijen buka',
                'konten' => 'Gunung Ijen mulai aktif kembali dan dibuka untuk pengunjung.',
                'kategori_id' => 1,
                'penulis_id' => 1,  
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan lebih banyak data di sini
            [
                'judul' => 'Berita Kedua',
                'konten' => 'Isi berita kedua.',
                'kategori_id' => 2,
                'penulis_id' => 2,  
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Berita Ketiga',
                'konten' => 'Isi berita ketiga',
                'created_at' => now(),
                'updated_at' => now(),
                'kategori_id' => 3,
                'penulis_id' => 3
                
            ],
        ]);
    }
}
