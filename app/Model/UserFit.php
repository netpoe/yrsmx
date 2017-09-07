<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\{
    Contracts\BelongsToQuizContract,
    Traits\BelongsToQuizTrait
};

class UserFit extends Model implements BelongsToQuizContract
{
    use BelongsToQuizTrait;

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

    public function upperPartFit()
    {
        return $this->hasOne(\App\Model\LuProductSubcategoriesAdapter::class, 'id', 'upper_part_fit');
    }

    public function lowerPartFit()
    {
        return $this->hasOne(\App\Model\LuProductSubcategoriesAdapter::class, 'id', 'lower_part_fit');
    }

    public function pantsFitShape()
    {
        return $this->hasOne(\App\Model\LuProductSubcategoriesAdapter::class, 'id', 'pants_fit_shape');
    }

    public function pantsFitHips()
    {
        return $this->hasOne(\App\Model\LuProductSubcategoriesAdapter::class, 'id', 'pants_fit_hips');
    }
}
