<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlternatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alternatif')->insert([

            'nama_alternatif' => 'Gonzales F1',
        ]);
        DB::table('alternatif')->insert([

            'nama_alternatif' => 'Naga Asia F1',
        ]);
        DB::table('alternatif')->insert([

            'nama_alternatif' => 'Bumaning F1',
        ]);
        DB::table('alternatif')->insert([

            'nama_alternatif' => 'Inden F1',
        ]);
        DB::table('alternatif')->insert([

            'nama_alternatif' => 'Diva F1',
        ]);
        DB::table('alternatif')->insert([

            'nama_alternatif' => 'Bonita F1',
        ]);
        DB::table('alternatif')->insert([
            'nama_alternatif' => 'Amara F1 (3n)',
        ]);
        DB::table('alternatif')->insert([
            'nama_alternatif' => 'Garnis F1',
        ]);
        DB::table('alternatif')->insert([
            'nama_alternatif' => 'Palguna F1',
        ]);
        DB::table('alternatif')->insert([
            'nama_alternatif' => 'Punggawa F1',
        ]);
        DB::table('alternatif')->insert([
            'nama_alternatif' => 'Baginda F1',
        ]);
        DB::table('alternatif')->insert([
            'nama_alternatif' => 'Madrid F1 (3n)',
        ]);
        DB::table('alternatif')->insert([
            'nama_alternatif' => 'Black Panther F1',
        ]);
        DB::table('alternatif')->insert([
            'nama_alternatif' => 'Maduri F1',
        ]);
        DB::table('alternatif')->insert([
            'nama_alternatif' => 'Brigade F1',
        ]);
        DB::table('alternatif')->insert([
            'nama_alternatif' => 'Sun Dragon F1',
        ]);
        DB::table('alternatif')->insert([
            'nama_alternatif' => 'Arizona F1 (3n)',
        ]);
        DB::table('alternatif')->insert([
            'nama_alternatif' => 'Arsenal F1 (3n)',
        ]);
        DB::table('alternatif')->insert([
            'nama_alternatif' => 'Seri F1 (3n)',
        ]);
        DB::table('alternatif')->insert([
            'nama_alternatif' => 'Limas F1 (3n)',
        ]);
    }
}
