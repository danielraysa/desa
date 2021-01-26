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
Route::get('', [PagesController::class, 'home']);
Route::get('surat', [PagesController::class, 'surat']);
Route::get('berita', [PagesController::class, 'berita']);
Route::get('pemdes', [PagesController::class, 'pemdes']);
Route::get('galeri', [PagesController::class, 'galeri']);
Route::get('statistik', [PagesController::class, 'statistik']);
Route::get('pengaduan', [PagesController::class, 'pengaduan']);
Route::get('skck', [FormController::class, 'skck']);
Route::get('tidak-mampu', [FormController::class, 'tidakMampu']);
Route::get('izin-keramaian', [FormController::class, 'izinKeramaian']);
Route::get('sukses', [FormController::class, 'sukses']);
Route::post('cek-ktp-skck', [FormController::class, 'cekKtpSkck'])->name('cek-ktp-skck');
Route::post('cek-ktp-tidak-mampu', [FormController::class, 'cekKtpTidakMampu'])->name('cek-ktp-tidak-mampu');
Route::post('cek-ktp-izin-keramaian', [FormController::class, 'cekKtpIzinKeramaian'])->name('cek-ktp-izin-keramaian');

// Route::get('login', [PagesController::class, 'login']);
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('home', [App\Http\Controllers\HomeController::class, 'admin']);
        /* Route::resource('konfigurasi', 'KonfigurasiController');
        Route::resource('konstrain', 'KonstrainController');
        Route::resource('user', 'UserController');
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
