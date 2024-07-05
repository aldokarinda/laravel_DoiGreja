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
        Schema::create('table_pemberi', function (Blueprint $table) {
            $table->id();
            $table->string('id_pem')->unique();
            $table->string('nama', 100);
            $table->text('alamat');
            $table->string('no_hp', 12);
            $table->string('email', 50);
            $table->boolean('aktif')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_pemberi');
    }
};
