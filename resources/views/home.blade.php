@extends('layouts.user')

@section('title', 'Ndesoo')

@section('container')
<!-- Masthead-->
<header class="masthead">
	<div class="container h-100">
		<div class="row h-100 align-items-center justify-content-center text-center">
			<div class="col-lg-10 align-self-end">
				<img src="{{ asset('assets/img/logo.png') }}" alt="">
				<hr class="divider my-4" />
			</div>
			<div class="col-lg-8 align-self-baseline">
				<h5 class="text-white mb-5 text-light">Sistem Informasi dan Website <b>Desa</b> Terintegrasi</h5>
				<a class="btn btn-primary btn-xl js-scroll-trigger" href="#surat">Pelajari Lebih Lanjut</a>
			</div>
		</div>
	</div>
</header>

<!-- Surat-->
<section class="page-section bg-primary" id="surat">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10 text-center">
				<h2 class="text-white mt-0">Layanan Surat</h2>
				<hr class="divider light my-4" />
				<div class="row mb-5">
					@foreach ($jenis_surat as $item)	
					<div class="col-lg-4 col-12 my-2">
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
				<a class="btn btn-light btn-xl js-scroll-trigger" href="{{ url('/layanan-surat') }}">Lihat Lebih Banyak</a>
			</div>
		</div>
	</div>
</section>

<!-- Berita -->
<section class="page-section" id="berita">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<h2 class="text-center mt-0">Berita</h2>
				<hr class="divider my-4" />
				<div id="carouselExampleCaptions" class="carousel slide mb-4" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
					<img src="assets/img/galeri/fullsize/1.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Berita 1</h5>
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
					</div>
					<div class="carousel-item">
					<img src="assets/img/galeri/fullsize/2.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Berita 2</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					</div>
					<div class="carousel-item">
					<img src="assets/img/galeri/fullsize/3.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Berita 3</h5>
						<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
					</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Pemdes-->
<section class="page-section bg-dark" id="pemdes">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10 text-center">
				<h2 class="text-center text-white mt-0">Pemerintahan Desa</h2>
				<hr class="divider my-4" />
				<div class="row mb-5">
				<div class="col-lg-4 col-12 my-2">
					<div class="card">
					<img src="assets/img/pemerintah/visimisi.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Visi Misi</h5>
						<p class="card-text">Visi dan Misi Desa.</p>
					</div>
					<div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
					</div>
					</div>
				</div>
				<div class="col-lg-4 col-12 my-2">
					<div class="card">
					<img src="assets/img/pemerintah/pemerintah.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Pemdes</h5>
						<p class="card-text">Pemerintahan Desa</p>
					</div>
					<div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
					</div>
					</div>
				</div>
				<div class="col-lg-4 col-12 my-2">
					<div class="card">
					<img src="assets/img/pemerintah/bpd.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">BPD</h5>
						<p class="card-text">Badan Perwakilan Desa</p>
					</div>
					<div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
					</div>
					</div>
				</div>
				</div>
				<a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ url('/pemdes') }}">Lihat Lebih Banyak</a>
			</div>
		</div>
	</div>
</section>

<!-- galeri-->
<div id="galeri">
	<div class="container-fluid p-0">
		<div class="row no-gutters">
			<div class="col-lg-4 col-sm-6">
				<a class="galeri-box" href="assets/img/galeri/fullsize/1.png">
					<img class="img-fluid" src="assets/img/galeri/thumbnails/1.png" alt="" />
					<div class="galeri-box-caption">
						<div class="project-category text-white-50">Ndesoo</div>
						<div class="project-name">Galeri</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a class="galeri-box" href="assets/img/galeri/fullsize/2.png">
					<img class="img-fluid" src="assets/img/galeri/thumbnails/2.png" alt="" />
					<div class="galeri-box-caption">
						<div class="project-category text-white-50">Ndesoo</div>
						<div class="project-name">Galeri</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a class="galeri-box" href="assets/img/galeri/fullsize/3.png">
					<img class="img-fluid" src="assets/img/galeri/thumbnails/3.png" alt="" />
					<div class="galeri-box-caption">
						<div class="project-category text-white-50">Category</div>
						<div class="project-name">Galeri</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a class="galeri-box" href="assets/img/galeri/fullsize/4.png">
					<img class="img-fluid" src="assets/img/galeri/thumbnails/4.png" alt="" />
					<div class="galeri-box-caption">
						<div class="project-category text-white-50">Ndesoo</div>
						<div class="project-name">Galeri</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a class="galeri-box" href="assets/img/galeri/fullsize/5.png">
					<img class="img-fluid" src="assets/img/galeri/thumbnails/5.png" alt="" />
					<div class="galeri-box-caption">
						<div class="project-category text-white-50">Ndesoo</div>
						<div class="project-name">Galeri</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a class="galeri-box" href="assets/img/galeri/fullsize/6.png">
					<img class="img-fluid" src="assets/img/galeri/thumbnails/6.png" alt="" />
					<div class="galeri-box-caption p-3">
						<div class="project-category text-white-50">Ndesoo</div>
						<div class="project-name">Galeri</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<!-- Statistik-->
<section class="page-section bg-dark text-white" id="statistik">
	<div class="container text-center">
		<h2 class="mb-4">Statistik</h2>
		<div class="container my-4">
			<canvas id="pieChart"></canvas>
			<script type="text/javascript">
			</script>
		</div>
		<a class="btn btn-primary btn-xl" href="{{ url('/statistik') }}">Lihat Lebih Banyak</a>
	</div>
</section>

<!-- Contact-->
<section class="page-section" id="pengaduan">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<h2 class="mt-0 text-center">Layanan Pengaduan</h2>
				<hr class="divider my-4" />
				<form>
				<div class="form-group row">
					<label for="inputJudulPeng" class="col-sm-2 col-form-label">Judul Pengaduan</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputJudulPeng">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputIsiPeng" class="col-sm-2 col-form-label">Isi Pengaduan</label>
					<div class="col-sm-10">
						<textarea name="inputIsiPeng" class="form-control" id="inputIsiPeng"></textarea>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputTanggalKej" class="col-sm-2 col-form-label">Tanggal Kejadian</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="inputTanggalKej">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputLokasiKej" class="col-sm-2 col-form-label">Lokasi Kejadian</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputLokasiKej">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputLokasiKej" class="col-sm-2 col-form-label">Upload Lampiran</label>
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
		<div class="row">
			<div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
				<i class="fas fa-phone fa-3x mb-3 text-muted"></i>
				<h6>+62 858 xxxx xxxx</h6>
			</div>
			<div class="col-lg-4 mr-auto text-center">
				<i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
				<!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
				<a class="d-block" href="mailto:contact@ndesoo.com"><h6>contact@ndesoo.com</h6></a>
			</div>
		</div>
	</div>
</section>
@endsection
