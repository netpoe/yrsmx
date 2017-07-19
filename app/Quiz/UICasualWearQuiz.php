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
        \App\Section\UserSizes\UserSizesComplete::class,

        // User Preferred Body Parts
        \App\Section\UserPreferredBodyParts\BodyParts::class,
        \App\Section\UserPreferredBodyParts\UserPreferredBodyPartsComplete::class,
    ];
}
