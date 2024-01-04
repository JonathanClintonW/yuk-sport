<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarPesanan extends Model
{
    use HasFactory;

    protected $table = 'daftar_pesanan';

    protected $fillable = [
        'tanggal_pesanan',
        'total_jam',
        'total_harga',
        'status_pesanan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lapangan()
    {
        return $this->belongsTo(Lapangan::class);
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class);
    }
}
