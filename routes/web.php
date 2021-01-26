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

Route::get('login', [PagesController::class, 'login']);