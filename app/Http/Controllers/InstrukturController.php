<?php

namespace App\Http\Controllers;

use App\Models\Instruktur;
use App\Models\Kategori;
use Illuminate\Http\Request;

class InstrukturController extends Controller
{
    public function index(){
        $instruktur = Instruktur::all();
        $kategori = Kategori::all();
        return view('admin.component.instruktur', compact('instruktur', 'kategori'));
    }

    public function post(Request $request){
        $data = new Instruktur();
        $data -> nama = $request -> nama;
        $data -> deksripsi = $request -> deskripsi;
        $data -> id_kategori = $request -> id_kategori;
        $image = $request -> foto;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request -> foto -> move('Instruktur', $imagename);
        $data -> foto=$imagename;
        $data -> save();
        return redirect('/dashboard/instruktur')->with('success','Instruktur Berhasil di Upload!');
    }

    public function delete($id){
        $data = Instruktur::find($id);
        $data -> delete();
        return redirect('/dashboard/instruktur')->with('delete','Instruktur Berhasil di Hapus!');
    }

    public function edit($id){
        $data = Instruktur::find($id);
        $kategori = Kategori::all();
        return view('admin.component.edit-instruktur', compact('data','kategori'));
    }

    public function editPost(Request $request, $id){
        $data = Instruktur::find($id);
        $data -> nama = $request -> nama;
        $data -> deksripsi = $request -> deskripsi;
        $data -> id_kategori = $request -> id_kategori;
        $image = $request -> foto;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request -> foto -> move('Instruktur', $imagename);
        $data -> foto=$imagename;
        $data -> save();
        return redirect('/dashboard/instruktur')->with('edit','Instruktur Berhasil di Edit!');
    }
}
