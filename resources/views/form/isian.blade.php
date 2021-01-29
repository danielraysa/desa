@extends('layouts.user')

@section('title', 'Ndesoo - Layanan Surat')

@section('container')
<!-- Masthead-->
<header class="masthead">
	<div class="container h-100">
		<div class="row h-100 align-items-center justify-content-center">
			<div class="col-lg-12">
				<h2 class="mt-0 text-light text-center">{{ $surat->nama_surat }}</h2>
				<hr class="divider my-4" />
				<form method="POST" action="{{ route('layanan-surat-kirim', $surat->id) }}" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-lg-8 col-12">
						@if (session('error'))
							<span class="invalid-feedback" style="display: block;" role="alert">
								<strong>{{ session('error') }}</strong>
							</span>
						@endif
						<div class="form-group row">
							<label for="inputJudulPeng" class="col-sm-2 col-form-label text-light">No KTP</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="no_ktp" name="no_ktp" value="{{ $data_user->data_penduduk->nik }}" />
								<input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ $data_user->id }}" />
							</div>
						</div>
						<div class="row">
							<label for="inputJudulPeng" class="col-sm-2 col-form-label text-light">Foto KTP</label>
							<div class="col-sm-10">
								<input type="file" class="form-control" accept=".jpg,.jpeg,.png" id="file_ktp" name="file_ktp" {{ $data_user->data_penduduk->file_ktp != "" ? "disabled" : "" }} />
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-2"></div>
							<label class="col-lg-10 {{ $data_user->data_penduduk->file_ktp != "" ? "text-white" : "text-danger" }}">{{ $data_user->data_penduduk->file_ktp != "" ? "* File KTP sudah diupload" : "* Upload File Terlebih Dahulu" }}</label>
						</div>
						<div class="row">
							<label for="inputJudulPeng" class="col-sm-2 col-form-label text-light">Foto KK</label>
							<div class="col-sm-10">
								<input type="file" class="form-control" accept=".jpg,.jpeg,.png" id="file_kk" name="file_kk" {{ $data_user->data_penduduk->file_kk != "" ? "disabled" : "" }} />
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-2"></div>
							<label class="col-lg-10 {{ $data_user->data_penduduk->file_kk != "" ? "text-white" : "text-danger" }}">{{ $data_user->data_penduduk->file_kk != "" ? "* File KK sudah diupload" : "* Upload File Terlebih Dahulu" }}</label>
						</div>
							
						<div class="form-group row">
							<label class="col-sm-2 col-form-label"></label>
							<div class="col-10 my-2 mb-5">
								<button type="submit" class="btn btn-primary btn-xl">Simpan</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<img src="" id="img_ktp" class="w-100" />
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</header>
@endsection
@push('extra-js')
<script>
	/* function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			
			reader.onload = function(e) {
			$('#img_ktp').attr('src', e.target.result);
			}
			
			reader.readAsDataURL(input.files[0]); // convert to base64 string
		}
	}

	$("#file_ktp").change(function() {
		readURL(this);
	}); */
</script>
@endpush