<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = 'profile';
    protected $fillable = [
        'foto',
        'nama', 'email',
        'departemens',
        'jabatans',
        'niks',
        'tempatlahir',
        'tanggallahirs',
        'usia',
        'jeniskelamin',
        'alamat',
        'pendidikan',
        'statuspernikan',
        'agama',
        'kewarganegaraan',
        'nohp',
        'statuskaryawan',
        'tanggaljoins',
        'kontrak',
        'bpjsketenagakerjaan',
        'bpjskesehatan',
        'npwp',
        'rekening'
    ];
}
