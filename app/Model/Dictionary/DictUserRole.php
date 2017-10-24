<?php

namespace App\Model\Dictionary;

use Illuminate\Database\Eloquent\Model;

class DictUserRole extends Model
{
    protected $table = 'dict_user_role';

    public $timestamps = false;

    const SUPER_ADMIN = 1;
    const ADMIN = 2;
    const CLIENT = 3;
    const DEALER = 4;
    const DISTRIBUTOR = 5;
}
