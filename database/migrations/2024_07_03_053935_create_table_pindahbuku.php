<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_pindahbuku', function (Blueprint $table) {
            $table->id();
            $table->string('id_pindahbuku')->unique();
            $table->date('tanggal');
            $table->string('id_rek_asal');

            $table->string('id_rek_tujuan');

            $table->string('id_akun');

            $table->string('keterangan', 250);
            $table->integer('jumlah');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_pindahbuku');
    }
};
