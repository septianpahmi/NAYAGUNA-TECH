<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        return view('admin.component.kategori',compact('kategori'));
    }

    public function post(Request $request){
        $data = new Kategori();
        $data -> kategori = $request -> kategori;
        $data -> save();
        return redirect('/dashboard/kategori')->with('success','Kategori Berhasil di Upload!');
    }

    public function delete($id){
        $kategori = Kategori::find($id);
        $kategori -> delete();
        return redirect('/dashboard/kategori')->with('delete','Kategori Berhasil di Hapus!');

    }
}
