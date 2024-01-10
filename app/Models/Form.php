<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jabatan',
        'perguruan_tinggi',
        'kategori_sekolah',
        'jalan',
        'rt_rw_desa_kel',
        'kecamatan',
        'provinsi',
        'kabupaten_kota',
        'kode_pos',
        'npsn',
        'telp',
        'no_fax',
        'email',
        'resi_pembayaran',
    ];
}
