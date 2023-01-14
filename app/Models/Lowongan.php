<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    public $table    = 'lowongan';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable = [
        'namaperusahaan',
        'idPembayaran',
        'deskripsiperusahaan',
        'alamatperusahaan',
        'gambar',
        'posisi',
        'gaji',
        'job_nature',
        'alamat_kantor',
        'min_pendidikan',
        'gender',
        'min_umur',
        'bataslamaran',
        'syarat_pekerjaan',
        'deskripsi_pekerjaan',
        'email',
        'notelp',
        'web',
    ];

    public function Pembayaran()
    {
        return $this->belongsTo(Pembayaran::class, 'idPembayaran');
    }
}
