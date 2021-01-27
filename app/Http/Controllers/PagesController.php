<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\PermintaanSurat;
use App\Models\JenisSurat;

class PagesController extends Controller
{
	public function home()
	{
		$jenis_surat = JenisSurat::get()->take(3);
        return view('home', compact('jenis_surat'));
	}

	public function surat()
	{
		return view('pages.surat');
	}

	public function berita()
	{
		return view('pages.berita');
	}

	public function pemdes()
	{
		return view('pages.pemdes');
	}

	public function galeri()
	{
		return view('pages.galeri');
	}

	public function statistik()
	{
		return view('pages.statistik');
	}

	public function pengaduan()
	{
		return view('pages.pengaduan');
	}

	public function login()
	{
        return view('pengguna.login');
    }
}
