<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    public $table    = 'chats';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable = [
        'text',
        'sent',
        'receive',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'sent');
    }

    public function user2()
    {
        return $this->belongsTo(User::class, 'receive');
    }
}
