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
            $table->string('total_harga');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('lapangan_id');
            $table->unsignedBigInteger('pembayaran_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('lapangan_id')->references('id')->on('lapangan');
            $table->foreign('pembayaran_id')->references('id')->on('pembayaran');
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
