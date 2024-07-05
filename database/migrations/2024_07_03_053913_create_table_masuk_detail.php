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
        Schema::create('table_masuk_detail', function (Blueprint $table) {
            $table->id('id_masuk_detail');

            $table->string('id_masuk');
            $table->foreign('id_masuk')
                ->references('id_masuk')
                ->on('table_masuk')
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
        Schema::table('table_masuk_detail', function (Blueprint $table) {

            $table->dropForeign(['id_akun']);
            $table->dropForeign(['id_masuk']);

        });

        Schema::dropIfExists('table_masuk_detail');


    }
};
