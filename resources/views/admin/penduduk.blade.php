@extends('layouts.admin', ['halaman' => 'Data Penduduk'])
@push('css')
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush
@push('js')
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
    $('.select2').select2();
    $(function () {
        $("#example1").DataTable({

        });
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });

        $('.checkbox-user').change(function(){
            var value = $(this).is(':checked');
            if(value){
                $('.user-create-box').show();
            }else{
                $('.user-create-box').hide();
            }
        });
        $('#nik').keyup(function(){
            var value = $(this).val();
            $('#username').val(value);
        });
    });
</script>
@endpush
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary float-lg-left" data-toggle="modal" data-target="#modalTambah">
                    Tambah Data
                </button>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>NIK</th>
                            <th>No. KK</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penduduk as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->no_kk }}</td>
                            <td>{{ $item->nama_lengkap }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalEdit-{{ $item->id }}" data-id="{{ $item->id }}"><i class="fas fa-edit"></i> Edit</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus-{{ $item->id }}" data-id="{{ $item->id }}"><i class="fas fa-trash"></i> Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{ route('penduduk.store') }}" method="POST">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" name="nik" id="nik" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label>No. KK</label>
                            <input type="text" name="no_kk" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" required/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" required>
                                <option disabled selected>--</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        {{-- <div class="form-group">
                            <input type="checkbox" name="user_create" class="checkbox-user" value="true" /> Buat user untuk login
                        </div> --}}
                        {{-- <div class="user-create-box" style="display: none"> --}}
                        <div class="user-create-box">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" id="username" class="form-control" required readonly/>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required />
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
@foreach ($penduduk as $item)
<div class="modal fade" id="modalEdit-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('penduduk.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h5 class="modal-title">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" name="nik" value="{{ $item->nik }}" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>No. KK</label>
                            <input type="text" name="no_kk" value="{{ $item->no_kk }}" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" value="{{ $item->nama_lengkap }}" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" value="{{ $item->alamat }}" class="form-control" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" value="{{ $item->tempat_lahir }}" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" value="{{ $item->tanggal_lahir }}" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option disabled selected>--</option>
                                <option {{ $item->jenis_kelamin == "L" ? 'selected' : '' }} value="L">Laki-laki</option>
                                <option {{ $item->jenis_kelamin == "P" ? 'selected' : '' }} value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="user_create" class="checkbox-user" value="true" /> Ubdah user login
                        </div>
                        <div class="user-create-box" style="display: none">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection
