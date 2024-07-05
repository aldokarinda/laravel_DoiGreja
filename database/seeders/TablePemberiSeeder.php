<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TablePemberiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('table_pemberi')->insert([
            ['id_pem' => 'UP001', 'nama' => 'Jemaat', 'alamat' => 'Manado', 'no_hp' => '1234567890', 'email' => '1234567890@gmail.com', 'aktif' => 0],
            ['id_pem' => 'UP002', 'nama' => 'Pemerintah', 'alamat' => 'Manado', 'no_hp' => '12345', 'email' => '12345@gmail.com', 'aktif' => 0],
            ['id_pem' => 'UP003', 'nama' => 'Sdr. A', 'alamat' => '-', 'no_hp' => '-', 'email' => 'a@gmail.com', 'aktif' => 0],
            ['id_pem' => 'UP004', 'nama' => 'Str. A', 'alamat' => '-', 'no_hp' => '-', 'email' => 'a@gmail.com', 'aktif' => 0],
            ['id_pem' => 'UP005', 'nama' => 'Daerah Konferens', 'alamat' => 'Manado', 'no_hp' => '-', 'email' => 'konferens@gmail.com', 'aktif' => 0],
            ['id_pem' => 'UP006', 'nama' => 'Uni Konferens Indonesia Kawasan Timur', 'alamat' => 'Manado', 'no_hp' => '-', 'email' => 'ukikt@gmail.com', 'aktif' => 0],
            ['id_pem' => 'UP008', 'nama' => 'Pendeta', 'alamat' => 'Manado', 'no_hp' => '0880808088', 'email' => 'pdt@gmail.com', 'aktif' => 0],
            ['id_pem' => 'UP009', 'nama' => 'Kel. B', 'alamat' => 'Manado', 'no_hp' => '12345654121', 'email' => 'a@mail.com', 'aktif' => 0],
        ]);
    }
}
