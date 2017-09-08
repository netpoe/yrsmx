<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function addresses()
    {
        return $this->hasMany('\App\Model\UserAddressAdapter', 'user_id', 'id');
    }

    public function address()
    {
        return $this->hasMany('App\Model\UserAddressAdapter', 'user_id');
    }

    public function quizzes()
    {
        return $this->hasMany(\App\Model\QuizAdapter::class, 'user_id');
    }

    public function sizes()
    {
        return $this->hasMany(\App\Model\UserSizesAdapter::class, 'user_id');
    }

    public function info()
    {
        return $this->hasOne(\App\Model\UserInfoAdapter::class, 'user_id');
    }

    public function role()
    {
        return $this->hasOne(\App\Model\LuUserRole::class, 'id', 'role_id');
    }

    public function products()
    {
        return $this->hasMany(\App\Model\RelProductsOutfitAdapter::class, 'user_id');
    }

    public function outfits()
    {
        return $this->hasMany(\App\Model\OutfitsAdapter::class, 'user_id');
    }

    public function assignedProducts()
    {
        return $this->hasMany(\App\Model\UserProductsAdapter::class, 'user_id');
    }
}
