<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_mobil',
        'id_user',
        'tanggal_mulai',
        'tanggal_selesai',
        'jaminan',
    ];

    public function mobils()
    {
        return $this->belongsTo(mobil::class, 'nim', 'nim');
    }

    public function users()
    {
        return $this->belongsTo(users::class, 'kd_mk', 'kd_mk');
    }
}
