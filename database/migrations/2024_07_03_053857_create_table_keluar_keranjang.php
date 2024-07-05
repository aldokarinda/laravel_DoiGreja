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
        Schema::create('table_keluar_keranjang', function (Blueprint $table) {
            $table->id('id_keluar_keranjang');
            $table->integer('id_akun');
            $table->integer('jumlah');
            $table->integer('id_pengguna');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_keluar_keranjang');
    }
};
