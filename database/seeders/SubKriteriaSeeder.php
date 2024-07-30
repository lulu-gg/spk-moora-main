<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKriteriaSeeder extends Seeder
{
    public function run()
    {
        DB::table('sub_kriterias')->insert([
            ['bobot' => 10, 'kriteria_id' => 1, 'max' => null, 'min' => null, 'name' => 'PKH Reguler'],
            ['bobot' => 20, 'kriteria_id' => 1, 'max' => null, 'min' => null, 'name' => 'PKH AKSES'],
            ['bobot' => 15, 'kriteria_id' => 2, 'max' => null, 'min' => null, 'name' => 'BPNT'],
            ['bobot' => 25, 'kriteria_id' => 2, 'max' => null, 'min' => null, 'name' => 'BST'],
            ['bobot' => 35, 'kriteria_id' => 2, 'max' => null, 'min' => null, 'name' => 'BLT-DD'],
            ['bobot' => 20, 'kriteria_id' => 3, 'max' => null, 'min' => null, 'name' => 'Yatim Piatu'],
            ['bobot' => 25, 'kriteria_id' => 3, 'max' => null, 'min' => null, 'name' => 'Yatim'],
            ['bobot' => 30, 'kriteria_id' => 3, 'max' => null, 'min' => null, 'name' => 'Piatu'],
            ['bobot' => 15, 'kriteria_id' => 4, 'max' => null, 'min' => null, 'name' => 'Orang Tua'],
            ['bobot' => 25, 'kriteria_id' => 4, 'max' => null, 'min' => null, 'name' => 'Panti'],
            ['bobot' => 35, 'kriteria_id' => 4, 'max' => null, 'min' => null, 'name' => 'Yayasan'],
            ['bobot' => 10, 'kriteria_id' => 5, 'max' => null, 'min' => null, 'name' => 'SD'],
            ['bobot' => 20, 'kriteria_id' => 5, 'max' => null, 'min' => null, 'name' => 'SMP'],
            ['bobot' => 30, 'kriteria_id' => 5, 'max' => null, 'min' => null, 'name' => 'SMA'],
            ['bobot' => 40, 'kriteria_id' => 5, 'max' => null, 'min' => null, 'name' => 'Kuliah'],
            ['bobot' => 5, 'kriteria_id' => 6, 'max' => null, 'min' => null, 'name' => '1 Saudara'],
            ['bobot' => 10, 'kriteria_id' => 6, 'max' => null, 'min' => null, 'name' => '2 Saudara'],
            ['bobot' => 15, 'kriteria_id' => 6, 'max' => null, 'min' => null, 'name' => '3 Saudara'],
            ['bobot' => 20, 'kriteria_id' => 6, 'max' => null, 'min' => null, 'name' => '4 Saudara'],
            ['bobot' => 10, 'kriteria_id' => 7, 'max' => null, 'min' => null, 'name' => 'Difable'],
            ['bobot' => 20, 'kriteria_id' => 7, 'max' => null, 'min' => null, 'name' => 'Korban Musibah'],
        ]);
    }
}


