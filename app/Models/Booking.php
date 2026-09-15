<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'nama_customer',
        'lokasi',
        'paket',
        'jumlah_orang',
        'harga',
        'status'
    ];
}