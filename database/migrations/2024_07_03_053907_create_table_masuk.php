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
        Schema::create('table_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('id_masuk')->unique();
            $table->date('tanggal');
            $table->integer('no_kwitansi')->unique();
            $table->string('id_pem');

            $table->string('id_rek');

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
        Schema::dropIfExists('table_masuk');
    }
};
