<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\{
    Contracts\HasSubcategoriesContract,
    Traits\SubcategoriesTrait
};

class UserSizes extends Model implements HasSubcategoriesContract
{
    use SubcategoriesTrait;

    protected $table = 'user_sizes';

    public $timestamps = false;

    protected $quizRelationshipMethodName = 'userSizes';

    protected $fillable = [
        'quiz_id',
        'height',
        'weight',
    ];
}
