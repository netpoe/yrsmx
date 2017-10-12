<?php

namespace App\Model\Quiz;

use Illuminate\Database\Eloquent\Model;

class QuizWork extends Model
{
    protected $table = 'quiz_work';

    public $timestamps = false;

    protected $fillable = [
        'quiz_id'
    ];

    public function quiz()
    {
        return $this->hasOne(\App\Model\QuizAdapter::class, 'quiz_id');
    }
}
