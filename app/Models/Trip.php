<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination',
        'slug',
        'airlines',
        'transit',
        'departure_date',
        'return_date',
        'price',
        'include',
        'exclude',
        'description',
        'image_path',
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public $timestamps = false;

}
