<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable;
    use HasApiTokens;

    public $table     = 'users';
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];
    protected $fillable = [
        'name',
        'email',
        'password',
        'created_at',
        'updated_at',
        'deleted_at',
        'remember_token',
        'email_verified_at',
    ];

    public function getEmailVerifiedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setEmailVerifiedAtAttribute($value)
    {
        $this->attributes['email_verified_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function role_user()
    {
        return $this->hasMany(Role_User::class, 'user_id', 'id');
    }

    public function sent()
    {
        return $this->hasMany(Chat::class, 'sent');
    }

    public function receive()
    {
        return $this->hasMany(Chat::class, 'receive');
    }

    public function chat()
    {
        return $this->hasMany(Chat::class, 'sent');
    }

    public function isAdmin()
    {
        return $this->role_user()->first()['role_id'] === 1;
    }

    public function isMitra()
    {
        return $this->role_user()->first()['role_id'] === 3;
    }

    public function isKandidat()
    {
        return $this->role_user()->first()['role_id'] === 4;
    }
}
