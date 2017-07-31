<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LuUserRole extends Model
{
    protected $table = 'lu_user_roles';

    public $timestamps = false;

    const SUPER_ADMIN = 1;
    const ADMIN = 2;
    const CLIENT = 3;
    const DEALER = 4;
    const DISTRIBUTOR = 5;
}
