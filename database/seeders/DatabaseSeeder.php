<?php

namespace Database\Seeders;

use App\Models\Alternatif;
use Illuminate\Database\Seeder;
use Database\Seeders\AktorSeeder;
use Database\Seeders\KriteriaSeeder;
use Database\Seeders\AlternatifSeeder;
use Database\Seeders\SubKriteriaSeeder;
use Database\Seeders\AlternatifSubKriteriaSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AktorSeeder::class,
            KriteriaSeeder::class,
            SubKriteriaSeeder::class,
            AlternatifSeeder::class,
            AlternatifSubKriteriaSeeder::class,
        ]);
    }
}
