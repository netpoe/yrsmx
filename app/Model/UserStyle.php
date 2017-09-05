<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\{
    Contracts\HasSubcategoriesContract,
    Traits\SubcategoriesTrait
};

class UserStyle extends Model implements HasSubcategoriesContract
{
    use SubcategoriesTrait;

    protected $table = 'user_style';

    public $timestamps = false;

    protected $quizRelationshipMethodName = 'userStyle';

    protected $fillable = [
        'quiz_id',
    ];
}
