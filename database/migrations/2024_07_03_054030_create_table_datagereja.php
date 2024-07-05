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
        Schema::create('table_datagereja', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jemaat', 60);
            $table->string('ketua_jemaat', 60);
            $table->string('pendeta_jemaat', 60);
            $table->string('bendahara_jemaat', 60);
            $table->date('jabatan_mulai')->default(now());
            $table->date('jabatan_berakhir')->default(now());
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_datagereja');
    }
};
