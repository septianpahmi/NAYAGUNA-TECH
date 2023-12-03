<?php

namespace App\Models;

use App\Models\Kategori;
use App\Models\Instruktur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelatihan extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'harga',
        'foto',
        'deskripsi',
        'id_kategori',
        'id_instruktur',
    ];

    public function kategoriId()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public function instrukturId()
    {
        return $this->belongsTo(Instruktur::class, 'id_instruktur');
    }
}
