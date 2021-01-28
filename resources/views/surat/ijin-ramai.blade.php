<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/pdf.css') }}" rel="stylesheet" type="text/css">
</head>
<body style="background-color: white !important">
    <table style="width: 100%; text-align: center">
        <tr>
            <td style="width: 30%"><img src="assets/img/logo-black.png" height="100" /></td>
            <td style="width: 70%">
                <h2 style="margin: 0">Pemerintah Kabupaten Mojokerto</h2>
                <h2 style="margin: 0">Kecamatan Mojokerto</h2>
                <h2 style="margin: 0">Desa Desoo</h2>
                {{-- <p>Jl. Ndeso no. 2</p> --}}
            </td>
        </tr>
    </table>
    
    <hr>
    <br>
    <center><h2>{{ $data->jns_surat->nama_surat }}</h2></center>
    <br>
    <p>Yang bertanda tangan di bawah ini Sekretaris Desa Desoo, Kecamatan .... , Kabupaten Mojokerto, Provinsi Jawa Timur menerangkan dengan sebenarnya bahwa :
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $data->pemohon->nama_lengkap }}</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td>{{ $data->pemohon->nik }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{ $data->pemohon->jenis_kel() }}</td>
        </tr>
        <tr>
            <td>TTL</td>
            <td>:</td>
            <td>{{ $data->pemohon->tempat_lahir }}, {{ $data->pemohon->tanggal_lahir }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $data->pemohon->alamat }}</td>
        </tr>
    </table>
    <br>
    <p>Demikian surat ini dibuat, untuk dipergunakan sebagaimana mestinya.</p>
    <br>
</body>
</html>