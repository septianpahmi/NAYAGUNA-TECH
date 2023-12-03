<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Instruktur;
use App\Models\Pelatihan;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $instruktur = Instruktur::all();
        $pelatihan = Pelatihan::all();
        $galeri = Galeri::all();
        $countPel = Pelatihan::count();
        $countIns = Instruktur::count();
        $countGal = Galeri::count();
        $user = User::count();
        return view('user.index', compact('instruktur','galeri','pelatihan','countPel','countIns', 'countGal', 'user'));
    }

    public function galeri()
    {   
        $data = Galeri::all();
        return view('user.component.galeri', compact('data'));
    }
    public function instruktur()
    {   
        $data = Instruktur::all();
        return view('user.component.instruktur', compact('data'));
    }
    public function pelatihan()
    {   
        $data = Pelatihan::all();
        return view('user.component.pelatihan', compact('data'));
    }
    public function about()
    {   
        $countPel = Pelatihan::count();
        $countIns = Instruktur::count();
        $countGal = Galeri::count();
        return view('user.component.about', compact('countPel','countIns', 'countGal'));
    }
    public function contact()
    {   
        return view('user.component.contact');
    }
}
