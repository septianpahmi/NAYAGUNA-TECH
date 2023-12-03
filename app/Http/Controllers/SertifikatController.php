<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Sertifikat;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SertifikatController extends Controller
{
    function index(){
        $user = User::where('role', 'user')->get();
        $sertifikat = Sertifikat::all();
        $kompetensi = Kategori::all();
        return view('admin.component.sertifikat', compact('kompetensi','sertifikat', 'user'));
    }

    function post(Request $request){
        $data = new Sertifikat();
        $nomor = $request->nomor;
        $bulan_romawi = Carbon::now()->format('M');

        $tahun = Carbon::now()->format('Y');
        $id_user = $request->id_user;
        $id_pelatihan = $request->id_pelatihan;
        $nomor_sertifikat = sprintf("%03d/PP/NAYAGUNA-TECH/%s/%s/%s", $nomor, 'REGULER', $bulan_romawi, $tahun);
        if (Sertifikat::where('nomor', $nomor_sertifikat)->exists()) {
            return redirect('/dashboard/sertifikat')->with('delete', 'Nomor Sertifikat sudah ada!');
        }
        $data->nomor = $nomor_sertifikat;
        $data -> judul = $request -> judul;
        $data -> id_user = $id_user;
        $data -> tgl_lahir = $request -> tgl_lahir;
        $data->id_pelatihan = $id_pelatihan;
        $data -> status = $request -> status;
        $image = $request -> foto;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request -> foto -> move('Sertifikat', $imagename);
        $data -> foto=$imagename;
        $data -> save();
        return redirect('/dashboard/sertifikat')->with('success','Sertifikat Berhasil di Upload!');
    }

    function print($id){

        $data = Sertifikat::find($id);
        // $kategori = $data -> kategori;
                $data = [
                    'nomor' => $data->nomor,
                    'judul' => $data->judul,
                    'nama' => $data->userId->name,
                    'materi' => $data->pelatihanId->kategori,
                    'tgl_lahir' => $data->tgl_lahir,
                    'status' => $data->status,
                    'foto' => $data->foto,
                ];

        $pdf = PDF::loadView('admin.component.print-sertifikat', $data);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('kwitansi.pdf');
    }   
    function printAll(){
        $data = Sertifikat::all();
        $pdf = PDF::loadView('admin.component.print-sertifikatAll', compact('data'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('kwitansi.pdf');
    }   

    function delete($id){
        $data = Sertifikat::find($id);
        $data->delete();
        return redirect('/dashboard/sertifikat')->with('delete','Sertifikat Berhasil di Hapus!');
    }
    function edit($id){
        $data = Sertifikat::find($id);
        $user = User::where('role', 'user')->get();
        $kompetensi = Kategori::all();
        return view('admin.component.edit-sertifikat', compact('kompetensi','data', 'user'));
    }

    function editPost(Request $request, $id){
        $data = Sertifikat::find($id);
        $nomor = $request->nomor;
        $bulan_romawi = Carbon::now()->format('M');

        $tahun = Carbon::now()->format('Y');
        $id_user = $request->id_user;
        $id_pelatihan = $request->id_pelatihan;
        $nomor_sertifikat = sprintf("%03d/PP/NAYAGUNA-TECH/%s/%s/%s", $nomor, 'REGULER', $bulan_romawi, $tahun);
        if (Sertifikat::where('nomor', $nomor_sertifikat)->exists()) {
            return redirect('/dashboard/sertifikat')->with('delete', 'Nomor Sertifikat sudah ada!');
        }
        $data->nomor = $nomor_sertifikat;
        $data -> judul = $request -> judul;
        $data -> id_user = $id_user;
        $data -> tgl_lahir = $request -> tgl_lahir;
        $data->id_pelatihan = $id_pelatihan;
        $data -> status = $request -> status;
        $image = $request -> foto;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request -> foto -> move('Sertifikat', $imagename);
        $data -> foto=$imagename;
        $data -> save();
        return redirect('/dashboard/sertifikat')->with('edit','Sertifikat Berhasil di Edit!');
    }
}
