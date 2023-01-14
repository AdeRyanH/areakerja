<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calonkandidat extends Model
{
    use HasFactory;

    public $table    = 'calonkandidats';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public $casts = [
        'namaskill'  => 'array',
        'rangeskill' => 'array',
        'school'     => 'array',
        'tahun'      => 'array',
        'organisasi' => 'array',
        'jabatan'    => 'array',
        'kantor'     => 'array',
        'pekerjaan'  => 'array',
    ];
    protected $fillable = [
        'namalengkap',
        'email',
        'alamat',
        'biografi',
        'skillutama',
        'namaskill',
        'rangeskill',
        'school',
        'tahun',
        'organisasi',
        'jabatan',
        'kantor',
        'pekerjaan',
        'image',
        'cv',
    ];
}
