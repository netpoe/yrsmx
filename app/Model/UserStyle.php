<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\{
    Contracts\BelongsToQuizContract,
    Traits\BelongsToQuizTrait
};

class UserStyle extends Model implements BelongsToQuizContract
{
    use BelongsToQuizTrait;

    protected $table = 'user_style';

    public $timestamps = false;

    protected $quizRelationshipMethodName = 'userStyle';

    protected $fillable = [
        'quiz_id',
    ];
}
