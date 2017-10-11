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
        return $this->hasMany(\App\Model\User\UserAddressAdapter::class, 'user_id', 'id');
    }

    public function quizzes()
    {
        return $this->hasMany(\App\Model\QuizAdapter::class, 'user_id');
    }

    public function sizes()
    {
        return $this->hasMany(\App\Model\User\UserSizesAdapter::class, 'user_id');
    }

    public function info()
    {
        return $this->hasOne(\App\Model\User\UserInfoAdapter::class, 'user_id');
    }

    public function role()
    {
        return $this->hasOne(\App\Model\LuUserRole::class, 'id', 'role_id');
    }

    public function products()
    {
        return $this->hasManyThrough(
            \App\Model\ProductsAdapter::class,
            \App\Model\UserProductsAdapter::class,
            'user_id',
            'id'
            );
    }

    public function outfits()
    {
        return $this->hasMany(\App\Model\UserOutfitsAdapter::class, 'user_id');
    }

    public function carts()
    {
        return $this->hasMany(\App\Model\UserCartsAdapter::class, 'user_id');
    }
}
