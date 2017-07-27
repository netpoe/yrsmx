<?php

namespace App\Model;

use App\Model\QuizWork\DressCode;

class QuizWorkAdapter extends QuizWork
{
    public function dressCode()
    {
        return DressCode::getOptionsValue($this->dress_code);
    }
}
