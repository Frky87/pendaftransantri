<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BiayaPenerimaanController;
use App\Http\Controllers\BiayaPondokController;
use App\Http\Controllers\CalonSantriController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HasilUjianController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterAdminController;
use App\Http\Controllers\PelaksanaanUjianController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PendidikanTerakhirController;
use App\Http\Controllers\PengunduranDiriController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\WaliSantriController;
use App\Http\Controllers\WawancaraController;
use Illuminate\Support\Facades\Route;

// Route Awal
Route::get('/', function () {
    return redirect()->route('login');
});

// Route Register Admin
Route::get('/registeradmin', [RegisterAdminController::class, 'showRegistrationForm'])->name('registeradmin');
Route::post('/registeradmin', [RegisterAdminController::class, 'registeradmin']);

// Route Login Admin
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Route Index
Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');

// Route Admin
Route::get('/Admin', [AdminController::class, 'index'])->name('Admin');

Route::get('logout', function(Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
});

Route::resource('/pelaksanaan_ujians', PelaksanaanUjianController::class);;
Route::get('/pdf-PelaksanaanUjian', [PelaksanaanUjianController::class, 'exportpdf'])->name('pdfPelaksanaanUjian');


Route::resource('/kelas', KelasController::class);;
Route::get('/pdf-Kelas', [KelasController::class, 'exportpdf'])->name('pdfKelas');

Route::resource('/pendaftaran', PendaftaranController::class);;
Route::get('/pdf-Pendaftaran', [PendaftaranController::class, 'exportpdf'])->name('pdfPendaftaran');

Route::resource('/biodata', CalonSantriController::class);;
Route::resource('calon_santri', CalonSantriController::class);;
Route::get('/pdf-Biodata', [CalonSantriController::class, 'exportpdf'])->name('pdfBiodata');

Route::resource('/informasiorangtua', WaliSantriController::class);;
Route::resource('wali_santri', WaliSantriController::class);;
Route::get('/pdf-WaliSantri', [WaliSantriController::class, 'exportpdf'])->name('pdfWaliSantri');


Route::resource('/pendidikanterakhir', PendidikanTerakhirController::class);;
Route::resource('pendidikan_terakhir', PendidikanTerakhirController::class);;
Route::get('/pdf-PendidikanTerakhir', [PendidikanTerakhirController::class, 'exportpdf'])->name('pdfPendidikanTerakhir');

Route::resource('/wawancara', WawancaraController::class);;
Route::resource('wawancara', WawancaraController::class);;
Route::get('/pdf-Wawancara', [WawancaraController::class, 'exportpdf'])->name('pdfWawancara');

Route::resource('/hasilujian', HasilUjianController::class);;
Route::resource('hasil_ujian', HasilUjianController::class);;
Route::get('/pdf-HasilUjian', [HasilUjianController::class, 'exportpdf'])->name('pdfHasilUjian');

Route::resource('/biayapenerimaan', BiayaPenerimaanController::class);;
Route::resource('biaya_penerimaan', BiayaPenerimaanController::class);;
Route::get('/pdf-BiayaPenerimaan', [BiayaPenerimaanController::class, 'exportpdf'])->name('pdfBiayaPenerimaan');

Route::resource('/santri', SantriController::class);;
Route::resource('santri', SantriController::class);;
Route::get('/pdf-Santri', [SantriController::class, 'exportpdf'])->name('pdfSantri');
Route::get('/calonsantri/{id}', [CalonSantriController::class, 'getCalonSantri']);

Route::resource('/biayapondok', BiayaPondokController::class);;
Route::resource('biaya_pondok', BiayaPondokController::class);;
Route::get('/pdf-BiayaPondok', [BiayaPondokController::class, 'exportpdf'])->name('pdfBiayaPondok');

Route::resource('/pembayaran', PembayaranController::class);;
Route::resource('pembayaran', PembayaranController::class);;
Route::get('/pdf-Pembayaran', [PembayaranController::class, 'exportpdf'])->name('pdfPembayaran');

Route::resource('/pengundurandiri', PengunduranDiriController::class);;
Route::resource('pengunduran_diri', PengunduranDiriController::class);;
Route::get('/pdf-PengunduranDiri', [PengunduranDiriController::class, 'exportpdf'])->name('pdfPengunduranDiri');

Route::get('/profilpondok', function () {
    return view('profilpondok');;
});

Route::get('/kriteria', function () {
    return view('kriteria');;
});

