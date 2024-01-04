<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';

    protected $fillable = [
        'metode_pembayaran',
        'jumlah_pembayaran',
        'status_pembayaran',
    ];

    public function daftarPesanan()
    {
        return $this->belongsTo(DaftarPesanan::class);
    }
}
