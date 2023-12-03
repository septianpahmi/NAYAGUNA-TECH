<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kwitansi extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis',
        'nomor',
        'id_pelatihan',
    ];

    public function kategoriId()
    {
        return $this->belongsTo(Kategori::class, 'id_pelatihan');
    }
}
