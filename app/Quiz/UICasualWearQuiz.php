<?php

namespace App\Quiz;

class UICasualWearQuiz extends AbstractUIQuiz
{
    public $sections = [
        \App\Section\Common\UserWeightHeight::class,
        \App\Section\Common\UserDressSize::class,
        \App\Section\Common\UserBlouseSize::class,
        // \App\Section\Common\UserBraSize::class,
        \App\Section\Common\UserSkirtSize::class,
    ];
}
