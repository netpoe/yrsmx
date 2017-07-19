<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserSizes extends Model
{
    protected $table = 'user_sizes';

    public $timestamps = false;

    protected $fillable = [
        'quiz_id',
        'height',
        'weight',
    ];
}
