<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstrukturController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KwitansiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\SertifikatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('user.index');
// });
Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::group(['middleware' => 'web'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/home/about', [HomeController::class, 'about']);
    Route::get('/home/pelatihan', [HomeController::class, 'pelatihan']);
    Route::get('/home/instruktur', [HomeController::class, 'instruktur']);
    Route::get('/home/galeri', [HomeController::class, 'galeri']);
    Route::get('/home/contact', [HomeController::class, 'contact']);
    //Pesan
    Route::post('/contact/send', [PesanController::class, 'post']);
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'index']);
    //kategori
    Route::get('dashboard/kategori', [KategoriController::class, 'index']);
    Route::post('/kategori/post', [KategoriController::class, 'post']);
    Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete']);
    //Instruktur
    Route::get('/dashboard/instruktur', [InstrukturController::class, 'index']);
    Route::post('/instruktur/post', [InstrukturController::class, 'post']);
    Route::get('/instruktur/delete/{id}', [InstrukturController::class, 'delete']);
    Route::get('/instruktur/edit/{id}', [InstrukturController::class, 'edit']);
    Route::post('/instruktur/edit-post/{id}', [InstrukturController::class, 'editPost']);
    //Pelatihan
    Route::get('/dashboard/pelatihan', [PelatihanController::class, 'index']);
    Route::post('/pelatihan/post', [PelatihanController::class, 'post']);
    Route::get('/pelatihan/delete/{id}', [PelatihanController::class, 'delete']);
    Route::get('/pelatihan/edit/{id}', [PelatihanController::class, 'edit']);
    Route::post('/pelatihan/edit-post/{id}', [PelatihanController::class, 'editPost']);
    //Galeri
    Route::get('/dashboard/galeri', [GaleriController::class, 'index']);
    Route::post('/galeri/post', [GaleriController::class, 'post']);
    Route::get('/galeri/delete/{id}', [GaleriController::class, 'delete']);
    Route::get('/galeri/edit/{id}', [GaleriController::class, 'edit']);
    Route::post('/galeri/edit-post/{id}', [GaleriController::class, 'editPost']);
    //Kwitansi
    Route::get('/dashboard/kwitansi', [KwitansiController::class, 'index']);
    Route::post('/kwitansi/post', [KwitansiController::class, 'post']);
    Route::get('/kwitansi/delete/{id}', [KwitansiController::class, 'delete']);
    Route::get('/kwitansi/print/{id}', [KwitansiController::class, 'print']);
    Route::get('/kwitansi/print-all', [KwitansiController::class, 'printAll']);
    Route::get('/kwitansi/edit/{id}', [KwitansiController::class, 'edit']);
    Route::post('/kwitansi/edit-post/{id}', [KwitansiController::class, 'editPost']);
    //Sertifikat
    Route::get('/dashboard/sertifikat', [SertifikatController::class, 'index']);
    Route::post('/sertifikat/post', [SertifikatController::class, 'post']);
    Route::get('/sertifikat/delete/{id}', [SertifikatController::class, 'delete']);
    Route::get('/sertifikat/print/{id}', [SertifikatController::class, 'print']);
    Route::get('/sertifikat/print-all', [SertifikatController::class, 'printAll']);
    Route::get('/sertifikat/edit/{id}', [SertifikatController::class, 'edit']);
    Route::post('/sertifikat/edit-post/{id}', [SertifikatController::class, 'editPost']);
    //Pesan
    Route::get('/contact/detail/{id}', [PesanController::class, 'detail']);
    Route::get('/contact/delete/{id}', [PesanController::class, 'delete']);
    //Laporan
    Route::get('/dashboard/laporan-bulan', [LaporanController::class, 'bulan']);
    Route::get('/dashboard/laporan-tahun', [LaporanController::class, 'tahun']);
    Route::post('/laporan/bulan-get', [LaporanController::class, 'bulanGet']);
    Route::post('/laporan/tahun-get', [LaporanController::class, 'tahunGet']);
});
