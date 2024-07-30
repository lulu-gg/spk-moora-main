<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Panggil seeder lainnya di sini
        $this->call([
            KriteriaSeeder::class,
            SubKriteriaSeeder::class,
            AlternatifSeeder::class,
        ]);
    }
}
