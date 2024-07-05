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
        Schema::create('table_keluar_detail', function (Blueprint $table) {
            $table->id();
            $table->string('id_keluar_detail');
            $table->string('id_keluar');
            $table->foreign('id_keluar')
                ->references('id_keluar')
                ->on('table_keluar')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('id_akun');
            $table->foreign('id_akun')
                ->references('id_akun')
                ->on('table_akun')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('jumlah');
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_keluar_detail', function (Blueprint $table) {

            $table->dropForeign(['id_akun']);
            $table->dropForeign(['id_keluar']);

        });

        Schema::dropIfExists('table_keluar_detail');


    }
};
