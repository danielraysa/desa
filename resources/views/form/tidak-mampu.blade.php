@extends('layouts.user')

@section('title', 'Ndesoo - Layanan Surat')

@section('container')
<!-- Masthead-->
<header class="masthead">
	<div class="container h-100">
		<div class="row h-100 align-items-center justify-content-center">
			<div class="col-lg-12">
				<h2 class="mt-0 text-light text-center">Form Surat Keterangan Tidak Mampu</h2>
				<hr class="divider my-4" />
				<form method="POST" action="{{ route('cek-ktp-tidak-mampu') }}">
				@csrf
				<div class="form-group row">
					<label for="inputJudulPeng" class="col-sm-2 col-form-label text-light">No KTP</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="no_ktp" name="no_ktp">
					</div>
				</div>
					@if ($errors->has('no_ktp'))
						<span class="invalid-feedback" style="display: block;" role="alert">
							<strong>{{ $errors->first('no_ktp') }}</strong>
						</span>
					@endif
					@if (isset($error))
						<span class="invalid-feedback" style="display: block;" role="alert">
							<strong>{{ $error }}</strong>
						</span>
					@endif
				<div class="form-group row">
					<label class="col-sm-2 col-form-label"></label>
					<div class="col-10 my-2 mb-5">
					<button type="submit" class="btn btn-primary btn-xl">Simpan</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</header>
@endsection
