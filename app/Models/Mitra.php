<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    public $table    = 'mitra';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable = [
        'nama',
        'email',
        'deskripsi',
        'alamat',
        'no',
        'logo',
        'slug',
        'koin',
        'idUser',
    ];

    public function mitrakandidat()
    {
        return $this->hasMany(Mitra_Kandidat::class, 'idMitra');
    }

    public function hire()
    {
        return $this->hasMany(Hire::class, 'idMitra');
    }
}
