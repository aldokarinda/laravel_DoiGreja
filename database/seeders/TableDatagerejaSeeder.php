<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableDatagerejaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('table_datagereja')->insert([
            'id' => 1,
            'nama_jemaat' => 'Jemaat Teling Manado',
            'ketua_jemaat' => 'Sdr./Str. Ketua aabbcc',
            'pendeta_jemaat' => 'Pdt. Pendeta',
            'bendahara_jemaat' => 'Sdr./Str. Bendahara',
            'jabatan_mulai' => '2023-01-01',
            'jabatan_berakhir' => '2024-12-31',
        ]);
    }
}
