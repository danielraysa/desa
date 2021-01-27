<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermintaanSurat extends Model
{
    protected $table = 'permintaan_surat';
    protected $guarded = [];

    public function jns_surat()
    {
        return $this->belongsTo('App\Models\JenisSurat', 'tipe_surat');
    }

    public function pemohon()
    {
        return $this->belongsTo('App\Models\Penduduk', 'no_ktp', 'nik');
    }
}
