<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserStyle extends Model
{
    protected $table = 'user_style';

    public $timestamps = false;

    protected $fillable = [
        'quiz_id',
    ];
}
