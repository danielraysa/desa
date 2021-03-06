<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\PagesController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\Master\UserController;
use App\Http\Controllers\Master\JenisSuratController;
use App\Http\Controllers\PermintaanSuratController;

Route::get('', [PagesController::class, 'home']);
// Route::get('surat', [PagesController::class, 'surat']);
Route::get('berita', [PagesController::class, 'berita']);
Route::get('pemdes', [PagesController::class, 'pemdes']);
Route::get('galeri', [PagesController::class, 'galeri']);
Route::get('statistik', [PagesController::class, 'statistik']);
Route::get('pengaduan', [PagesController::class, 'pengaduan']);
Route::get('layanan-surat', [FormController::class, 'permintaan_surat'])->name('layanan-surat');;
Route::get('skck', [FormController::class, 'skck'])->name('ktp-skck');;
Route::get('tidak-mampu', [FormController::class, 'tidakMampu'])->name('ktp-tidak-mampu');;
Route::get('izin-keramaian', [FormController::class, 'izinKeramaian'])->name('ktp-izin-keramaian');;
Route::get('sukses', [FormController::class, 'sukses']);
Route::post('cek-ktp-skck', [FormController::class, 'cekKtpSkck'])->name('cek-ktp-skck');
Route::post('cek-ktp-tidak-mampu', [FormController::class, 'cekKtpTidakMampu'])->name('cek-ktp-tidak-mampu');
Route::post('cek-ktp-izin-keramaian', [FormController::class, 'cekKtpIzinKeramaian'])->name('cek-ktp-izin-keramaian');

// Route::get('login', [PagesController::class, 'login']);
Auth::routes(['register'=>false]);
Route::group(['middleware' => 'auth'], function () {

    Route::get('layanan-surat/{id}', [FormController::class, 'permintaan_surat_id'])->name('layanan-surat-id');
    Route::post('layanan-surat/{id}/kirim', [FormController::class, 'permintaan_surat_kirim'])->name('layanan-surat-kirim');

    Route::prefix('admin')->group(function () {
        Route::get('home', [HomeController::class, 'admin']);
        Route::resource('user', UserController::class);
        Route::resource('jenis-surat', JenisSuratController::class);
        Route::resource('permintaan-surat', PermintaanSuratController::class);
        Route::resource('penduduk', PendudukController::class);
        Route::get('permintaan-surat/{id}/cetak', [PermintaanSuratController::class, 'cetak'])->name('cetak-permintaan');
        /* Route::resource('konfigurasi', 'KonfigurasiController');
        Route::resource('konstrain', 'KonstrainController');
        Route::resource('siswa', 'SiswaController');
        Route::resource('guru', 'GuruController');
        Route::resource('mata-pelajaran', 'MataPelajaranController');
        Route::resource('kelas', 'KelasController');
        Route::resource('penempatan', 'PenempatanKelasController');
        Route::resource('semester', 'SemesterController');
        Route::resource('jadwal-pelajaran', 'JadwalPelajaranController');
        Route::get('penjadwalan', 'PenjadwalanController@index')->name('penjadwalan.index');
        // Route::resource('penjadwalan', 'PenjadwalanController');
        Route::resource('penilaian', 'NilaiSiswaController'); */
    });
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
