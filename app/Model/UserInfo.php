<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = 'user_info';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
    ];

    public function getDobAttribute($value)
    {
        $m = new \Moment\Moment($value);

        return $m->fromNow()->getYears() . ' años';
    }
}
