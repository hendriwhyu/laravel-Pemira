<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use withoutModelEvents;
    public function run(): void
    {
        $this->call([
            JurusanSeeder::class,
            KandidatSeeder::class,
            PenggunaSeeder::class
        ]);
    }
}
