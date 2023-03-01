<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 1,
            'nama_sub_kriteria' => 'Rendah',
            'bobot_sub_kriteria' => 3,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 1,
            'nama_sub_kriteria' => 'Menengah',
            'bobot_sub_kriteria' => 2,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 1,
            'nama_sub_kriteria' => 'Tinggi',
            'bobot_sub_kriteria' => 1,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 2,
            'nama_sub_kriteria' => '>50',
            'bobot_sub_kriteria' => 5,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 2,
            'nama_sub_kriteria' => '41-50',
            'bobot_sub_kriteria' => 4,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 2,
            'nama_sub_kriteria' => '31-40',
            'bobot_sub_kriteria' => 3,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 2,
            'nama_sub_kriteria' => '21-30',
            'bobot_sub_kriteria' => 2,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 2,
            'nama_sub_kriteria' => '10-20',
            'bobot_sub_kriteria' => 1,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 3,
            'nama_sub_kriteria' => '>6',
            'bobot_sub_kriteria' => 3,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 3,
            'nama_sub_kriteria' => '4-5',
            'bobot_sub_kriteria' => 2,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 3,
            'nama_sub_kriteria' => '<3',
            'bobot_sub_kriteria' => 1,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 4,
            'nama_sub_kriteria' => '61 - 69',
            'bobot_sub_kriteria' => 3,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 4,
            'nama_sub_kriteria' => '55 – 60',
            'bobot_sub_kriteria' => 2,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 4,
            'nama_sub_kriteria' => '<55 atau >69',
            'bobot_sub_kriteria' => 1,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 5,
            'nama_sub_kriteria' => 'Tahan 3 atau lebih Penyakit',
            'bobot_sub_kriteria' => 4,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 5,
            'nama_sub_kriteria' => 'Tahan 2 Penyakit',
            'bobot_sub_kriteria' => 3,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 5,
            'nama_sub_kriteria' => 'Tahan 1 Penyakit',
            'bobot_sub_kriteria' => 2,
        ]);

        DB::table('sub_kriteria')->insert([
            'kriteria_id' => 5,
            'nama_sub_kriteria' => 'Tidak Tahan Penyakit',
            'bobot_sub_kriteria' => 1,
        ]);
    }
}
