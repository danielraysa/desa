@extends('layouts.app')

@section('title', 'Ndesoo - Layanan Surat')

@section('container')
<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-lg-12" >
                <h2 class="mt-0 text-light text-center">Sukses tersimpan, silahkan menunggu informasi selanjutnya</h2>
                @if($status)
                <h2 class="mt-0 text-light text-center">{{ $status }}</h2>
                @endif
                <div class="form-group row" >
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-10 my-2 mb-5" style="justify-content: center;">
                    <a class="btn btn-primary btn-xl" href="{{url('/')}}">Kembali ke beranda</a>
                    </div>
                  </div>
                <hr class="divider my-4" />
            </div>
        </div>
    </div>
</header>
@endsection