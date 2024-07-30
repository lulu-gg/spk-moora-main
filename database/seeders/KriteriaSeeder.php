<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaSeeder extends Seeder
{
    public function run()
    {
        DB::table('kriterias')->insert([
            ['id' => 1, 'kode' => 'C1', 'name' => 'PKH', 'bobot' => 0.15, 'type' => 1, 'min' => 1, 'max' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'kode' => 'C2', 'name' => 'KKS', 'bobot' => 0.15, 'type' => 1, 'min' => 1, 'max' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'kode' => 'C3', 'name' => 'Yatim/Piatu', 'bobot' => 0.2, 'type' => 1, 'min' => 1, 'max' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'kode' => 'C4', 'name' => 'Dari Panti Asuhan', 'bobot' => 0.15, 'type' => 1, 'min' => 1, 'max' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'kode' => 'C5', 'name' => 'Drop Out', 'bobot' => 0.1, 'type' => 0, 'min' => 1, 'max' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'kode' => 'C6', 'name' => '>3 Saudara Serumah', 'bobot' => 0.05, 'type' => 0, 'min' => 1, 'max' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'kode' => 'C7', 'name' => 'Kendala', 'bobot' => 0.1, 'type' => 1, 'min' => 1, 'max' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
