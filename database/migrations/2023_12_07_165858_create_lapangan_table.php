<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lapangan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lapangan')->unique;
            $table->string('alamat');
            $table->string('kategori');
            $table->integer('harga');
            $table->string('path_gambar');
            $table->text('deskripsi');
            $table->softDeletes();
            $table->timestamps();
            $table->unsignedBigInteger('admin_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lapangan');
    }
};
