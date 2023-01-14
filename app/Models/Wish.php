<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    use HasFactory;

    public $table       = 'wish';
    protected $fillable = [
        'ip',
    ];

    public function Job()
    {
        return $this->belongsTo(Job::class, 'idJob', 'id');
    }
}
