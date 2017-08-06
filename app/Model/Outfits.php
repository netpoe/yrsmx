<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Outfits extends Model
{
    protected $table = 'outfits';

    public function products()
    {
        return $this->hasMany(\App\Model\RelProductsOutfitAdapter::class, 'outfit_id');
    }
}
