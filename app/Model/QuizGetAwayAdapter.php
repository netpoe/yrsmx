<?php

namespace App\Model;

use App\Model\QuizGetAway\Destination;

class QuizGetAwayAdapter extends QuizGetAway
{
    public function destination()
    {
        return Destination::getOptionsValue($this->destination);
    }
}
