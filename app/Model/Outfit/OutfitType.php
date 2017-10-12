<?php

namespace App\Model\Outfit;

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


