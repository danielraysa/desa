@extends('layouts.app')

@section('title', 'Ndesoo - Layanan Surat')

@section('container')
<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 text-center">
                <h2 class="text-white mt-0">Layanan Surat</h2>
                <hr class="divider my-4" />
                <div class="row mb-5">
                  <div class="col-lg-4 col-12 my-2">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-4x fa-envelope-open-text text-primary mb-4"></i>
                        <h5 class="card-title">Surat Keterangan Catatan Kepolisian</h5>
                        <p class="card-text">Pengajuan untuk warga yang membutuhkan pembuatan SKCK (Surat Keterangan Catatan Kepolisian)</p>
                        <a href="#" class="btn btn-primary">Buat Surat</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-12 my-2">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-4x fa-envelope-open-text text-primary mb-4"></i>
                        <h5 class="card-title">Surat Keterangan Tidak Mampu</h5>
                        <p class="card-text">Pengajuan untuk memenuhi suatu persyaratan bagi keluarga yang tidak mampu</p>
                        <a href="#" class="btn btn-primary">Buat Surat</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-12 my-2">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-4x fa-envelope-open-text text-primary mb-4"></i>
                        <h5 class="card-title">Surat Pengantar Izin Keramaian</h5>
                        <p class="card-text">Pengajuan untuk mengadakan acara yang menimbulkan keramaian</p>
                        <a href="#" class="btn btn-primary">Buat Surat</a>
                      </div>
                    </div>
                  </div>
                </div>  
            </div>
        </div>
    </div>
</header>
@endsection