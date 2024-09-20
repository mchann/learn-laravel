<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenulisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penulis')->insert([
            ['nama' => 'Virda Echa'],
            ['nama' => 'Dina Shelley'],
            ['nama' => 'Dona Deisha']
        ]);
    }
}
