<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    public $table    = 'artikel';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable = [
        'judul',
        'des_singkat',
        'des1',
        'des2',
        'des3',
        'des4',
        'des5',
        'des6',
        'des7',
        'judul_singkat',
        'penghantar',
        'judulisi1',
        'isi11',
        'isi12',
        'isi13',
        'isi14',
        'isi15',
        'isi16',
        'judulisi2',
        'isi21',
        'isi22',
        'isi23',
        'isi24',
        'isi25',
        'isi26',
        'judulisi3',
        'isi31',
        'isi32',
        'isi33',
        'isi34',
        'isi35',
        'isi36',
        'judulisi4',
        'isi41',
        'isi42',
        'isi43',
        'isi44',
        'isi45',
        'isi46',
        'judulisi5',
        'isi51',
        'isi52',
        'isi53',
        'isi54',
        'isi55',
        'isi56',
    ];
}
