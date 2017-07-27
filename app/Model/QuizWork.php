<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class QuizWork extends Model
{
    protected $table = 'quiz_work';

    public $timestamps = false;

    protected $fillable = [
        'quiz_id'
    ];
}
