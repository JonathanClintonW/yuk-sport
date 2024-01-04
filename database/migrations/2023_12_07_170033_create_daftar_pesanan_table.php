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
        Schema::create('daftar_pesanan', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal_pesanan');
            $table->integer('total_jam');
            $table->integer('total_harga');
            $table->string('status_pesanan');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('lapangan_id');
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('lapangan_id')->references('id')->on('lapangan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_pesanan');
    }
};
