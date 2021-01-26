@extends('layouts.app')

@section('title', 'Ndesoo - Layanan Surat')

@section('container')
<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-lg-12">
                <h2 class="mt-0 text-light text-center">Layanan Pengaduan</h2>
                <hr class="divider my-4" />
                <form>
                  <div class="form-group row">
                    <label for="inputJudulPeng" class="col-sm-2 col-form-label text-light">Judul Pengaduan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputJudulPeng">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputIsiPeng" class="col-sm-2 col-form-label text-light">Isi Pengaduan</label>
                    <div class="col-sm-10">
                        <textarea name="inputIsiPeng" class="form-control" id="inputIsiPeng"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputTanggalKej" class="col-sm-2 col-form-label text-light">Tanggal Kejadian</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputTanggalKej">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputLokasiKej" class="col-sm-2 col-form-label text-light">Lokasi Kejadian</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputLokasiKej">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputLokasiKej" class="col-sm-2 col-form-label text-light">Upload Lampiran</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-10 my-2 mb-5">
                      <button type="submit" class="btn btn-primary btn-xl">Submit Pengaduan</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</header>
@endsection