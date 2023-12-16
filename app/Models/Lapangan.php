<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    use HasFactory;

    protected $table = 'lapangan';
    
    protected $fillable = [
        'nama_lapangan',
        'alamat',
        'kategori',
        'harga',
        'path_gambar',
        'deskripsi',
    ];

    public function daftarPesanan()
    {
        return $this->hasMany(DaftarPesanan::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
