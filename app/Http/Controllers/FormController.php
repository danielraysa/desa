<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userDetail;
use App\Models\permintaan_surat;
class FormController extends Controller
{
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
        $user = userDetail::where('no_ktp',$request->no_ktp)->first();
        if($user){
            \DB::beginTransaction();
            $permintaan_surat = new permintaan_surat;
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
            return view('form/skck', [
                'error' => 'User tidak ditemukan'
                ]);
        }
    }
    public function cekKtpTidakMampu(Request $request){
        $this->validate($request, [
            'no_ktp' => 'required',
        ]);
        $user = userDetail::where('no_ktp',$request->no_ktp)->first();
        if($user){
            \DB::beginTransaction();
            $permintaan_surat = new permintaan_surat;
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
                'error' => 'User tidak ditemukan'
                ]);
        }
    }
    public function cekKtpIzinKeramaian(Request $request){
        $this->validate($request, [
            'no_ktp' => 'required',
        ]);
        $user = userDetail::where('no_ktp',$request->no_ktp)->first();
        if($user){
            \DB::beginTransaction();
            $permintaan_surat = new permintaan_surat;
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
                'error' => 'User tidak ditemukan'
                ]);
        }
	}
}
