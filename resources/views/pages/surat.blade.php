@extends('layouts.user')

@section('title', 'Ndesoo - Layanan Surat')

@section('container')
<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-12 text-center">
                <h2 class="text-white mt-0">Layanan Surat</h2>
                <hr class="divider my-4" />
                <div class="row mb-5">
					@foreach ($surat as $item)	
					<div class="col-lg-3 col-md-6 col-12 my-2">
						<div class="card">
							<div class="card-body">
							<i class="fas fa-4x fa-envelope-open-text text-primary mb-4"></i>
							<h5 class="card-title">{{ $item->nama_surat }}</h5>
							<p class="card-text">{{ $item->kegunaan }}</p>
							<a href="{{ route('layanan-surat-id', $item->id) }}" class="btn btn-primary">Buat Surat</a>
							</div>
						</div>
					</div>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
