<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $table = 'penduduk';
    protected $guarded = [];

    public function jenis_kel()
    {
        if($this->jenis_kelamin == 'L'){
            return 'Laki-laki';
        }
        return 'Perempuan';
    }
}
