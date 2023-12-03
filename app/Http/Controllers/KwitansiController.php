<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Kategori;
use App\Models\Kwitansi;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\Facade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KwitansiController extends Controller
{
    function index(){
        $data = Kwitansi::all();
        $kompetensi = Kategori::all();
        return view('admin.component.kwitansi', compact('kompetensi','data'));
    }
    function print($id){

        $kwitansi = Kwitansi::find($id);
        // $kategori = $kwitansi -> kategori;
                $data = [
                    'nomor' => $kwitansi->nomor,
                    'instansi' => $kwitansi->instansi,
                    'hal' => $kwitansi->hal,
                    'id_pelatihan' => $kwitansi->kategoriId->kategori,
                    'peserta' => $kwitansi->peserta,
                    'terbilang' => $kwitansi->terbilang,
                    'penerima' => $kwitansi->penerima,
                ];

        $pdf = PDF::loadView('admin.component.print-kwitansi', $data);
        return $pdf->stream('kwitansi.pdf');
    }   

    function printAll(){

        $data = Kwitansi::all();

        $pdf = PDF::loadView('admin.component.print-kwitansiAll', compact('data'));
        return $pdf->stream('kwitansi.pdf');
    }   
    

    function post(Request $request){
        $data = new Kwitansi();
        $nomor = $request->nomor;
        $bulan_romawi = Carbon::now()->format('M');

        $tahun = Carbon::now()->format('Y');
        $id_pelatihan = $request->id_pelatihan;
        $nomor_kwitansi = sprintf("%03d/NAYAGUNA-TECH/%s/%s/%s", $nomor, 'REGULER', $bulan_romawi, $tahun);
        if (Kwitansi::where('nomor', $nomor_kwitansi)->exists()) {
            return redirect('/dashboard/kwitansi')->with('delete', 'Nomor kwitansi sudah ada!');
        }
        $data->nomor = $nomor_kwitansi;
        $data->instansi = $request->instansi;
        $data->hal = $request->hal;
        $data->id_pelatihan = $id_pelatihan;
        $data->peserta = $request->peserta;
        $data->terbilang = $request->terbilang;
        $data->penerima = $request->penerima;
        $data->save();
        return redirect('/dashboard/kwitansi')->with('success','Kwitansi Berhasil di Upload!');
    }

    function delete($id){
        $data = Kwitansi::find($id);
        $data -> delete();
        return redirect('/dashboard/kwitansi')->with('delete','Kwitansi Berhasil di Hapus!');
    }

    function edit($id){
        $data = Kwitansi::find($id);
        $kompetensi = Kategori::all();
        return view('admin.component.edit-kwitansi', compact('kompetensi','data'));
    }

    function editPost(Request $request, $id){
        $data = Kwitansi::find($id);
        $nomor = $request->nomor;
        $bulan_romawi = Carbon::now()->format('M');

        $tahun = Carbon::now()->format('Y');
        $id_pelatihan = $request->id_pelatihan;
        $nomor_kwitansi = sprintf("%03d/NAYAGUNA-TECH/%s/%s/%s", $nomor, 'REGULER', $bulan_romawi, $tahun);
        if (Kwitansi::where('nomor', $nomor_kwitansi)->exists()) {
            return redirect('/dashboard/kwitansi')->with('delete', 'Nomor kwitansi sudah ada!');
        }
        $data->nomor = $nomor_kwitansi;
        $data->instansi = $request->instansi;
        $data->hal = $request->hal;
        $data->id_pelatihan = $id_pelatihan;
        $data->peserta = $request->peserta;
        $data->terbilang = $request->terbilang;
        $data->penerima = $request->penerima;
        $data->save();
        return redirect('/dashboard/kwitansi')->with('edit','Kwitansi Berhasil di Edit!');
        
    }
}
