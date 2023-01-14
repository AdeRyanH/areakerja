<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    public $table    = 'price';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public $casts = [
        'list' => 'array',
    ];
    protected $fillable = [
        'nama',
        'deskripsi_singkat',
        'deskripsi_full',
        'list',
        'harga',
        'warna',
        'keterangan',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
