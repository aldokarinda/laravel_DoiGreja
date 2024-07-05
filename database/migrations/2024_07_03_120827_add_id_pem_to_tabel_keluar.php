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
        Schema::table('table_keluar', function (Blueprint $table) {
            //

            $table->foreign('id_pem')
                ->references('id_pem')
                ->on('table_pemberi')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_rek')
                ->references('id_rek')
                ->on('table_rekening')
                ->onUpdate('cascade')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_keluar', function (Blueprint $table) {
            //
            $table->dropForeign(['id_pem']);
            $table->dropForeign(['id_rek']);
        });
    }
};
