<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserPreferredBodyParts extends Model
{
    protected $table = 'user_preferred_body_parts';

    public $timestamps = false;

    protected $fillable = [
        'quiz_id',
    ];

    public function quiz()
    {
        return $this->hasOne(\App\Model\QuizAdapter::class, 'quiz_id');
    }
}
