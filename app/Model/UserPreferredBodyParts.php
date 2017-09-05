<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\{
    Contracts\HasSubcategoriesContract,
    Traits\SubcategoriesTrait
};

class UserPreferredBodyParts extends Model implements HasSubcategoriesContract
{
    use SubcategoriesTrait;

    protected $table = 'user_preferred_body_parts';

    public $timestamps = false;

    protected $quizRelationshipMethodName = 'userPreferredBodyParts';

    protected $fillable = [
        'quiz_id',
    ];

    public function quiz()
    {
        return $this->hasOne(\App\Model\QuizAdapter::class, 'quiz_id');
    }
}
