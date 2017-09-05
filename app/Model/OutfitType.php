<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\{
    Contracts\BelongsToQuizContract,
    Traits\BelongsToQuizTrait
};

class OutfitType extends Model implements BelongsToQuizContract
{
    use BelongsToQuizTrait;

    protected $quizRelationshipMethodName = 'outfitType';
}


