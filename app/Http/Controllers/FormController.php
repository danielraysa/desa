<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\PermintaanSurat;
use App\Models\JenisSurat;
class FormController extends Controller
{
    public function permintaan_surat(){
        $surat = JenisSurat::all();
		return view('pages.surat', compact('surat'));
    }
    public function permintaan_surat_id($id){
        $surat = JenisSurat::find($id);
		return view('form.isian', compact('surat'));
    }
    public function permintaan_surat_kirim(Request $request, $id){
        $surat = JenisSurat::find($id);
        $penduduk = Penduduk::where('nik', $request->no_ktp)->get()->first();
        if(!$penduduk){
            return redirect()->back()->with('error', 'Nomor induk/KTP tidak terdaftar');
        }
        $permintaan = PermintaanSurat::create([
            'user_id' => $penduduk->id,
            'no_ktp' => $request->no_ktp,
            'tipe_surat' => $id,
            'status' => 'menunggu',
        ]);
		return redirect('sukses')->with('sukses', 'Permintaan surat anda akan segera diproses');
		// return view('form.isian', compact('surat'));
    }
    public function skck(){
		return view('form/skck');
    }
    public function tidakMampu(){
		return view('form/tidak-mampu');
    }
    public function izinKeramaian(){
		return view('form/izin-keramaian');
    }
    public function sukses(){
		return view('form/sukses');
    }
    public function cekKtpSkck(Request $request){
        $this->validate($request, [
            'no_ktp' => 'required',
        ]);
        $user = Penduduk::where('nik',$request->no_ktp)->first();
        if($user){
            \DB::beginTransaction();
            $permintaan_surat = new PermintaanSurat;
            $permintaan_surat->no_ktp = $request->no_ktp;
            $permintaan_surat->user_id = $user->id;
            $permintaan_surat->tipe_surat = 'SKCK';
            $permintaan_surat->status = 'Pending';
            $permintaan_surat->save();
            \DB::commit();
            return view('form/sukses', [
                'status' => 'Permintaan surat keterangan catatan kepolisian anda akan segera diproses',
                'user' => $user
                ]);
        }else{
            /* return view('form/skck', [
                'error' => 'Nomor induk/KTP tidak ditemukan'
                ]); */
            return redirect()->route('ktp-skck')->with('error', 'Nomor induk/KTP tidak ditemukan');
        }
    }
    public function cekKtpTidakMampu(Request $request){
        $this->validate($request, [
            'no_ktp' => 'required',
        ]);
        $user = Penduduk::where('nik',$request->no_ktp)->first();
        if($user){
            \DB::beginTransaction();
            $permintaan_surat = new PermintaanSurat;
            $permintaan_surat->no_ktp = $request->no_ktp;
            $permintaan_surat->user_id = $user->id;
            $permintaan_surat->tipe_surat = 'tidak-mampu';
            $permintaan_surat->status = 'Pending';
            $permintaan_surat->save();
            \DB::commit();
            return view('form/sukses', [
                'status' => 'Permintaan surat keterangan tidak mampu anda akan segera diproses',
                'user' => $user
                ]);
        }else{
            return view('form/tidak-mampu', [
                'error' => 'Nomor induk/KTP tidak ditemukan'
                ]);
        }
    }
    public function cekKtpIzinKeramaian(Request $request){
        $this->validate($request, [
            'no_ktp' => 'required',
        ]);
        $user = Penduduk::where('nik',$request->no_ktp)->first();
        if($user){
            \DB::beginTransaction();
            $permintaan_surat = new PermintaanSurat;
            $permintaan_surat->no_ktp = $request->no_ktp;
            $permintaan_surat->user_id = $user->id;
            $permintaan_surat->tipe_surat = 'izin-keramaian';
            $permintaan_surat->status = 'Pending';
            $permintaan_surat->save();
            \DB::commit();
            return view('form/sukses', [
                'status' => 'Permintaan surat pengantar izin keramaian anda akan segera diproses',
                'user' => $user
                ]);
        }else{
            return view('form/tidak-mampu', [
                'error' => 'Nomor induk/KTP tidak ditemukan'
                ]);
        }
	}
}
