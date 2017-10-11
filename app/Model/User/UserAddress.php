<?php

namespace App\Model\User;

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

    public function country()
    {
        return $this->hasOne(\App\Model\LuAddressCountriesAdapter::class, 'id', 'country_id');
    }

    public function state()
    {
        return $this->hasOne(\App\Model\LuAddressStatesAdapter::class, 'id', 'state_id');
    }
}
