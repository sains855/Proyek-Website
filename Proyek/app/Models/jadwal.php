<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $fillable = [
        'nama_kegiatan',
        'tema',
        'waktu',
        'lokasi',
        'poster',
        'kategori',
    ];

}
