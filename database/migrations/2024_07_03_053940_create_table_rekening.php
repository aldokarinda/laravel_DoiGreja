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
        Schema::create('table_rekening', function (Blueprint $table) {
            $table->id();
            $table->string('id_rek')->unique();
            $table->string('nama_rekening', 50);
            $table->string('no_rekening', 20);
            $table->double('saldo');
            $table->string('keterangan', 150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_rekening');
    }
};
