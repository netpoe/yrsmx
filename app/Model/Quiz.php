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
}
