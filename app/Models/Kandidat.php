<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    public $table       = 'kandidat';
    protected $fillable = [
        'nama',
        'idSkill',
        'domisili',
        'biografi',
        'slug',
        'idUser',
        'image',
        'cv',
        'status',
        'updated_at',
        'deleted_at',
    ];

    public function rekomendasi()
    {
        return $this->hasMany(Rekomendasi::class, 'idKandidat');
    }

    public function mainSkill()
    {
        return $this->belongsTo(MainSkill::class, 'idSkill');
    }

    public function hire()
    {
        return $this->hasMany(Hire::class, 'idKandidat');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }
}
