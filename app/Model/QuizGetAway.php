<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class QuizGetAway extends Model
{
    protected $table = 'quiz_get_away';

    public $timestamps = false;

    protected $fillable = [
        'quiz_id',
    ];

    public function quiz()
    {
        return $this->hasOne(\App\Model\QuizAdapter::class, 'quiz_id');
    }
}
