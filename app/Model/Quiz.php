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
        return $this->belongsTo(\App\Model\UserAdapter::class, 'user_id');
    }

    public function userSizes()
    {
        return $this->hasOne(\App\Model\UserSizesAdapter::class, 'quiz_id');
    }

    public function userPreferredBodyParts()
    {
        return $this->hasOne(\App\Model\User\UserPreferredBodyPartsAdapter::class, 'quiz_id');
    }

    public function userFit()
    {
        return $this->hasOne(\App\Model\User\UserFitAdapter::class, 'quiz_id');
    }

    public function userStyle()
    {
        return $this->hasOne(\App\Model\UserStyleAdapter::class, 'quiz_id');
    }

    public function work()
    {
        return $this->hasOne(\App\Model\QuizWorkAdapter::class, 'quiz_id');
    }

    public function getAway()
    {
        return $this->hasOne(\App\Model\QuizGetAwayAdapter::class, 'quiz_id');
    }

    public function outfitType()
    {
        return $this->hasOne(\App\Model\LuProductSubattributesAdapter::class, 'id', 'outfit_type');
    }
}
