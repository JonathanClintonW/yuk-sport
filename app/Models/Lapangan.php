<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lapangan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'lapangan';
    
    protected $fillable = [
        'nama_lapangan',
        'alamat',
        'kategori',
        'harga',
        'path_gambar',
        'deskripsi',
    ];

    protected $dates = ['deleted_at'];
    
    public function daftarPesanan()
    {
        return $this->hasMany(DaftarPesanan::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
