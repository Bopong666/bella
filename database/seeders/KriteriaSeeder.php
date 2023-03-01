<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kriteria')->insert([
            'nama' => 'Rekomendasi Dataran',
            'bobot' => 5,
            'tipe' => 'cost',
        ]);
        DB::table('kriteria')->insert([
            'nama' => 'Potensi Hasil (ton/ha)',
            'bobot' => 4.8,
            'tipe' => 'benefit',
        ]);
        DB::table('kriteria')->insert([
            'nama' => 'Bobot Buah (kg)',
            'bobot' => 4,
            'tipe' => 'benefit',
        ]);
        DB::table('kriteria')->insert([
            'nama' => 'Umur Panen (HST)',
            'bobot' => 3.8,
            'tipe' => 'cost',
        ]);
        DB::table('kriteria')->insert([
            'nama' => 'Ketahanan Penyakit',
            'bobot' => 4.5,
            'tipe' => 'benefit',
        ]);
    }
}
