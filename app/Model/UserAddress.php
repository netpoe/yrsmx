<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $table = 'user_address';

    protected $fillable = [
        'user_id',
        'country_id',
        'state_id',
        'zip_code',
        'city',
        'street',
        'interior',
        'neighborhood',
        'updated_at',
    ];
}
