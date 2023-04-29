<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $table    = 'locations';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable = [
        'name',
        'slug',
        'province_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // public function jobs()
    // {
    //     return $this->hasMany(Job::class, 'location_id', 'id');
    // }

    // public function province() {
    //     return $this->belongsTo(province::class, 'id');
    // }
}