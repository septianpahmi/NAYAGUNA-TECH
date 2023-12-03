<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(){
        $galeri = Galeri::all();
        return view('admin.component.galeri', compact('galeri'));
    }

    public function post(Request $request){
        $data = new Galeri();
        $data -> judul = $request -> judul;
        $data -> waktu = $request -> waktu;
        $data -> deskripsi = $request -> deskripsi;
        $image = $request -> foto;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request -> foto -> move('Galeri', $imagename);
        $data -> foto=$imagename;
        $data -> save();
        return redirect('/dashboard/galeri')->with('success','Galeri Berhasil di Upload!');

    }

    public function delete($id){
        $data = Galeri::find($id);
        $data -> delete();
        return redirect('/dashboard/galeri')->with('delete','Galeri Berhasil di Hapus!');
    }

    public function edit($id){
        $data = Galeri::find($id);
        return view('admin.component.edit-galeri', compact('data'));
    }

    public function editPost(Request $request,$id){
        $data = Galeri::find($id);
        $data -> judul = $request -> judul;
        $data -> waktu = $request -> waktu;
        $data -> deskripsi = $request -> deskripsi;
        $image = $request -> foto;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request -> foto -> move('Galeri', $imagename);
        $data -> foto=$imagename;
        $data -> save();
        return redirect('/dashboard/galeri')->with('edit','Galeri Berhasil di Edit!');
    }
}
