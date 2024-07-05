<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TableAkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('table_akun')->insert([
            ['id_akun' => 'AC001', 'nama_akun' => 'Persepuluhan', 'tipe_akun' => 'Kewajiban', 'keterangan' => 'Seluruh persepuluhan yang diterima jemaat wajib disetorkan ke Daerah'],
            ['id_akun' => 'AC002', 'nama_akun' => 'PT Daerah', 'tipe_akun' => 'Kewajiban', 'keterangan' => '50% dari Persembahan Terpadu yang diterima menjadi kewajiban jemaat untuk menyetorkan ke daerah'],
            ['id_akun' => 'AC003', 'nama_akun' => 'PT Jemaat', 'tipe_akun' => 'Pendapatan', 'keterangan' => '50% dari  Persembahan Terpadu yang diterima jemaat untuk digunakan dalam operasional jemaat'],
            ['id_akun' => 'AC004', 'nama_akun' => 'Per. Pembangunan', 'tipe_akun' => 'Pendapatan', 'keterangan' => 'Persembahan yang dikumpulkan khusus untuk dana pembangunan jemaat'],
            ['id_akun' => 'AC005', 'nama_akun' => 'Per. SS Dewasa', 'tipe_akun' => 'Pendapatan', 'keterangan' => 'Persembahan yang dikumpulkan pada acara sekolah sabat dewasa'],
            ['id_akun' => 'AC006', 'nama_akun' => 'Per. SS Anak', 'tipe_akun' => 'Pendapatan', 'keterangan' => 'Persembahan yang dikumpulkan pada acara sekolah sabat anak-anak'],
            ['id_akun' => 'AC007', 'nama_akun' => 'Per. Khusus', 'tipe_akun' => 'Kewajiban', 'keterangan' => 'Persembahan yang dikhususkan untuk pelayanan yang akan disetorkan ke daerah'],
            ['id_akun' => 'AC008', 'nama_akun' => 'Listrik, Air dan Internet', 'tipe_akun' => 'Pengeluaran', 'keterangan' => 'Pengeluaran untuk listrik, air, dan internet yang digunakan gereja'],
            ['id_akun' => 'AC009', 'nama_akun' => 'Gaji Kostor', 'tipe_akun' => 'Pengeluaran', 'keterangan' => 'Pengeluaran untuk gaji penjaga gereja'],
            ['id_akun' => 'AC010', 'nama_akun' => 'Insentif Pendeta', 'tipe_akun' => 'Pengeluaran', 'keterangan' => 'Pengeluaran berupa insentif bagi pendeta yang melayani. Diberikan per bulan.'],
            ['id_akun' => 'AC011', 'nama_akun' => 'Dana Sosial dan Duka', 'tipe_akun' => 'Pengeluaran', 'keterangan' => 'Pengeluaran berupa santunan bagi yang sakit atau yang mengalami duka.'],
            ['id_akun' => 'AC012', 'nama_akun' => 'Kebersihan dan Pemeliharaan', 'tipe_akun' => 'Pengeluaran', 'keterangan' => 'Pengeluaran terkait kebersihan dan pemeliharaan fasilitas gereja'],
            ['id_akun' => 'AC013', 'nama_akun' => 'Pembangunan Gereja', 'tipe_akun' => 'Pengeluaran', 'keterangan' => 'Pengeluaran Jemaat terkait pembangunan gereja.'],
            ['id_akun' => 'AC014', 'nama_akun' => 'Sumbangan lainnya', 'tipe_akun' => 'Pengeluaran', 'keterangan' => 'Pengeluaran berbentuk sumbangan yang diberikan oleh jemaat kepada pihak lain seperti pendidikan.'],
            ['id_akun' => 'AC015', 'nama_akun' => 'Administrasi bank', 'tipe_akun' => 'Pengeluaran', 'keterangan' => 'Pengeluaran berupa biaya administrasi rekening bank'],
            ['id_akun' => 'AC016', 'nama_akun' => 'Dana Sosial', 'tipe_akun' => 'Pendapatan', 'keterangan' => 'Persembahan khusus untuk kegiatan sosial'],
        ]);

    }
}
