<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableRekeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('table_rekening')->insert([
            ['id_rek' => 'REK01', 'nama_rekening' => 'Kas', 'no_rekening' => '000000', 'saldo' => 0, 'keterangan' => 'Kas di tangan dalam bentuk uang tunai'],
            ['id_rek' => 'REK02', 'nama_rekening' => 'Bank Mandiri', 'no_rekening' => '000001', 'saldo' => 0, 'keterangan' => 'Rekening Bank atas nama Gereja untuk penerimaan dan pengeluaran kas'],
            ['id_rek' => 'REK03', 'nama_rekening' => 'Bank BRI', 'no_rekening' => '000002', 'saldo' => 0, 'keterangan' => 'Rekening Bank BRI atas nama Gereja untuk penerimaan dan pengeluaran kas'],
            ['id_rek' => 'REK04', 'nama_rekening' => 'Bank SulutGo', 'no_rekening' => '000003', 'saldo' => 0, 'keterangan' => 'Rekening simpanan kas'],
        ]);
    }
}
