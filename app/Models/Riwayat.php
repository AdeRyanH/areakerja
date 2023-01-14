<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    public $table      = 'riwayat';
    public $timestamps = true;
    protected $dates   = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable = [
        'ip',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function Job()
    {
        return $this->belongsTo(Job::class, 'idJob', 'id');
    }
}
