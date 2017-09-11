<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserOutfits extends Model
{
    protected $table = 'user_outfits';

    protected $fillable = [
        'user_id',
    ];
}
