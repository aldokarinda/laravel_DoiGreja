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
        Schema::table('table_pindahbuku', function (Blueprint $table) {
            //

            $table->foreign('id_rek_asal')
                ->references('id_rek')
                ->on('table_rekening')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_rek_tujuan')
                ->references('id_rek')
                ->on('table_rekening')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_akun')
                ->references('id_akun')
                ->on('table_akun')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_pindahbuku', function (Blueprint $table) {
            //

            $table->dropForeign(['id_rek_asal']);
            $table->dropForeign(['id_rek_tujuan']);
            $table->dropForeign(['id_akun']);

        });
    }
};
