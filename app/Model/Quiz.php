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
        return $this->hasOne(\App\Model\UserPreferredBodyPartsAdapter::class, 'quiz_id');
    }

    public function userFit()
    {
        return $this->hasOne(\App\Model\UserFitAdapter::class, 'quiz_id');
    }

    public function getStartedAtAttribute($value)
    {
        $m = new \Moment\Moment($value);

        return $m->calendar();
    }
}
