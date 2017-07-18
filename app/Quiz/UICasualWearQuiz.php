<?php

namespace App\Quiz;

class UICasualWearQuiz extends AbstractUIQuiz
{
    public $sections = [
        \App\Section\Common\UserWeightHeight::class,
    ];
}
