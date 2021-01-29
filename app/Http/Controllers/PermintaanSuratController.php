<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PermintaanSurat;
use App\Models\JenisSurat;
use App\Models\Penduduk;
use PDF;
class PermintaanSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $permintaan_surat = PermintaanSurat::with('jns_surat','pemohon')->get();
        // dd($permintaan_surat);
        return view('admin.surat', compact('permintaan_surat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cetak($id)
    {
        // $jeniss_surat = JenisSurat::find($jenis);
        $permintaan = PermintaanSurat::with('jns_surat','pemohon')->find($id);
        $blade_path = $permintaan->jns_surat->blade_path;
        if($blade_path == null){
            // abort(404, "Format surat belum dibuat.");
            $blade_path = 'surat.skck';
        }
        $pdf = PDF::loadView($blade_path, ['data' => $permintaan]);

        return $pdf->stream();
    }
}
