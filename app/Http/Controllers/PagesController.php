<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home()
	{
		return view('home');
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
