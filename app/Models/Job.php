<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public $table    = 'jobs';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public $casts = [
        'requirements'     => 'array',
        'full_description' => 'array',
    ];
    protected $fillable = [
        'title',
        'salary',
        'address',
        'top_rated',
        'company_id',
        'job_nature',
        'pendidikan',
        'umur',
        'requirements',
        'gender',
        'lokasikerja',
        'bataslamaran',
        'email',
        'notelp',
        'website',
        'created_at',
        'updated_at',
        'deleted_at',
        'location_id',
        'full_description',
        'slug',
        'short_description',
        'categories_id',
        'regency_id',
        'formulir'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    // public function location()
    // {
    //     return $this->belongsTo(Location::class, 'location_id');
    // }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function Wish()
    {
        return $this->belongsTo(Wish::class, 'id');
    }

    public function Riwayat()
    {
        return $this->belongsTo(Riwayat::class, 'id');
    }

    public function regencies()
    {
        return $this->belongsTo(Regency::class, 'regency_id');
    }

    public function scopeSearchResults($query)
    {
        return $query->when(! empty(request()->input('location', 0)), static function ($query) {
            $query->whereHas('location', static function ($query) {
                $query->whereId(request()->input('location'));
            });
        })
            ->when(! empty(request()->input('category', 0)), static function ($query) {
                $query->whereHas('categories', static function ($query) {
                    $query->whereId(request()->input('category'));
                });
            })
            ->when(! empty(request()->input('search', '')), static function ($query) {
                $query->where(static function ($query) {
                    $search = request()->input('search');
                    $query->where('title', 'LIKE', "%{$search}%")
                        ->orWhere('full_description', 'LIKE', "%{$search}%")
                        ->orWhere('job_nature', 'LIKE', "%{$search}%")
                        ->orWhere('requirements', 'LIKE', "%{$search}%")
                        ->orWhere('address', 'LIKE', "%{$search}%")
                        ->orWhereHas('company', static function ($query) use ($search) {
                            $query->where('name', 'LIKE', "%{$search}%");
                        });
                });
            });
    }
}