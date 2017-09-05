<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\{
    Contracts\BelongsToQuizContract,
    Traits\BelongsToQuizTrait
};

class UserPreferredBodyParts extends Model implements BelongsToQuizContract
{
    use BelongsToQuizTrait;

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
