<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class province extends Model
{
    use HasFactory;

    public $table    = 'provinces';
    
    protected $fillable = [
      'province'  
    ];

    public function location()
    {
        return $this->hasMany(Location::class, 'province_id', 'id');
    }
}