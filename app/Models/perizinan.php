<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perizinan extends Model
{
    protected $table = 'perizinan';
    protected $fillable =
    [
        'nama',
        'nik',
        'tanggallahir',
        'tanggalpengajuan',
        'jabatan',
        'keterangan',
        'atasan',
        'departemen',
        'alasancuti'
    ];
}
