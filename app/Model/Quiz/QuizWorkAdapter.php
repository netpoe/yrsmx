<?php

namespace App\Model\Quiz;

use App\Model\Quiz\Work\DressCode;

class QuizWorkAdapter extends QuizWork
{
    public function dressCode()
    {
        return DressCode::getOptionsValue($this->dress_code);
    }
}
