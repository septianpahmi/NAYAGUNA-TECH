<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Kwitansi;
use Illuminate\Http\Request;
use App\Exports\ReportExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    function bulan(){
        return view('admin.component.laporan-bulan');
    }
    function tahun(){
        return view('admin.component.laporan-tahun');
    }

    function bulanGet(Request $request){
        $selectedMonth = $request->input('month');
        $reportData = Kwitansi::whereMonth('created_at', '=', date('m', strtotime($selectedMonth)))
        ->get();

        return Excel::download(new ReportExport($reportData), 'laporan-bulanan.xlsx');
    }
    function tahunGet(Request $request){
        $selectedYear = $request->input('year');

        // Pastikan format tahunnya sesuai dengan yang diharapkan
        $carbonDate = Carbon::parse($selectedYear);
        $formattedYear = $carbonDate->year;

        // Proses untuk mendapatkan data berdasarkan tahun
        $reportData = Kwitansi::whereYear('created_at', '=', $formattedYear)->get();

        return Excel::download(new ReportExport($reportData), 'laporan-tahunan.xlsx');
    }
}
