<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("biodata")->insert([
            'nama' => 'TES',
            'tahun_masuk' => 2020,
            'tgl_lahir' => '2020-02-02',
            'alamat' => 'Surabaya',
            'is_aktif' => '1',
            'notelp' => '123',
        ]);
    }
}