<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\{
    Contracts\HasSubcategoriesContract,
    Traits\SubcategoriesTrait
};

class UserFit extends Model implements HasSubcategoriesContract
{
    use SubcategoriesTrait;

    protected $table = 'user_fit';

    public $timestamps = false;

    protected $fillable = [
        'quiz_id'
    ];

    protected $quizRelationshipMethodName = 'userFit';

    public function quiz()
    {
        return $this->hasOne(\App\Model\QuizAdapter::class, 'quiz_id');
    }
}
