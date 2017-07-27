<?php

namespace App\Quiz;

class UIGetAwayQuiz extends AbstractUIQuiz
{
    protected $quizName = 'get-away';

    public $sections = [
        // CUSTOM
        \App\Section\QuizGetAway\Destination::class,

        // TALLA
        \App\Section\UserSizes\UserWeightHeight::class,
        \App\Section\UserSizes\UserDressSize::class,
        \App\Section\UserSizes\UserBlouseSize::class,
        \App\Section\UserSizes\UserBraSizes::class,
        \App\Section\UserSizes\UserSkirtSize::class,
        \App\Section\UserSizes\UserPantsSize::class,
        \App\Section\UserSizes\UserShoesSize::class,
        \App\Section\UserSizes\Complete::class,

        // User Preferred Body Parts
        \App\Section\UserPreferredBodyParts\BodyParts::class,
        \App\Section\UserPreferredBodyParts\BodyType::class,
        \App\Section\UserPreferredBodyParts\Complete::class,

        // User Fit
        \App\Section\UserFit\UpperPartFit::class,
        \App\Section\UserFit\LowerPartFit::class,
        \App\Section\UserFit\PantsFit::class,
        \App\Section\UserFit\Complete::class,

        // User info
        \App\Section\UserInfo\BasicInfo::class,
        \App\Section\UserInfo\ExtraInfo::class,
        \App\Section\UserInfo\Complete::class,

        // User style
        \App\Section\UserStyle\Colors::class,
        \App\Section\UserStyle\Prints::class,
        \App\Section\UserStyle\Fabrics::class,
        \App\Section\UserStyle\Words::class,
        \App\Section\UserStyle\Clothes::class,
        \App\Section\UserStyle\Accessories::class,
        \App\Section\UserStyle\Shoes::class,
        \App\Section\UserStyle\Jewelry::class,
        \App\Section\UserStyle\Risk::class,
        \App\Section\UserStyle\Complete::class,
    ];
}
