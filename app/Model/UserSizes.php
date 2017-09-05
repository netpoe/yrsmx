<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\{
    Contracts\BelongsToQuizContract,
    Traits\BelongsToQuizTrait
};

class UserSizes extends Model implements BelongsToQuizContract
{
    use BelongsToQuizTrait;

    protected $table = 'user_sizes';

    public $timestamps = false;

    protected $quizRelationshipMethodName = 'userSizes';

    protected $fillable = [
        'quiz_id',
        'height',
        'weight',
    ];
}
