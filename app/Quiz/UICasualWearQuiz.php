<?php

namespace App\Quiz;

class UICasualWearQuiz extends AbstractUIQuiz
{
    public $sections = [
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
    ];
}
