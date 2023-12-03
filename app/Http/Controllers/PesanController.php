<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pesan;
use App\Models\Galeri;
use App\Models\Pelatihan;
use App\Models\Instruktur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PesanController extends Controller
{
    function post(Request $request){
        $pesan = new Pesan();
        $pesan -> name = $request -> name;
        $pesan -> email = $request -> email;
        $pesan -> subject = $request -> subject;
        $pesan -> pesan = $request -> pesan;
        $pesan -> save();
        return redirect('/home/contact')->with('success','Pesan Berhasil di Kirim!');
    }

    function delete($id){
        $pesan = Pesan::find($id);
        $pesan->delete();
        return redirect('/dashboard')->with('delete','Pesan Berhasil di Hapus!');
    }

    function detail($id){
        $pesan = Pesan::find($id);
        $user = User::count();
        $pelatihan = Pelatihan::count();
        $instruktur = Instruktur::count();
        $galeri = Galeri::count();
        return view('admin.component.detail-pesan', compact('user','pelatihan','instruktur','galeri','pesan'));
    }
}
