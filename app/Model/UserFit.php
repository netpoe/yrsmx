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
}
