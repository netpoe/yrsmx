<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LuUserRole extends Model
{
    protected $table = 'lu_user_roles';

    const SUPER_ADMIN = 'super-admin';
    const ADMIN = 'admin';
    const CLIENT = 'client';
    const DEALER = 'dealer';
    const DISTRIBUTOR = 'distributor';
}
