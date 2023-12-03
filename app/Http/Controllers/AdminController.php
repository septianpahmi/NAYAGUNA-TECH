<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Instruktur;
use App\Models\Pelatihan;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::count();
        $pelatihan = Pelatihan::count();
        $instruktur = Instruktur::count();
        $galeri = Galeri::count();
        $pesan = Pesan::all();
        return view('admin.index', compact('user','pelatihan','instruktur','galeri','pesan'));
    }
}
