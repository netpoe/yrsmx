<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quiz';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'outfit_type',
        'started_at'
    ];

    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }

    public function userSizes()
    {
        return $this->hasOne(\App\Model\UserSizes::class, 'quiz_id');
    }
}
