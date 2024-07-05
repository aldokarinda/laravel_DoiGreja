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
        Schema::create('table_keluar', function (Blueprint $table) {
            $table->id();
            $table->string('id_keluar')->unique();
            $table->date('tanggal');
            $table->string('no_kwitansi', 20)->unique();
            $table->string('id_pem');
            $table->string('id_rek');
            $table->string('referensi', 20);
            $table->string('keterangan', 250);
            $table->string('status', 10)->default('valid');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_keluar');
    }
};
