<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sertifikat extends Model
{
    use HasFactory;

    public function userId()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function pelatihanId()
    {
        return $this->belongsTo(Kategori::class, 'id_pelatihan');
    }
}
