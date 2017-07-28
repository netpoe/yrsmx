<?php

namespace App\Model;

use App\Model\QuizGetAway\Destination;
use App\Model\QuizGetAway\TripType;
use App\Model\QuizGetAway\Weather;

class QuizGetAwayAdapter extends QuizGetAway
{
    public function destination()
    {
        return Destination::getOptionsValue($this->destination);
    }

    public function tripType()
    {
        return TripType::getOptionsValue($this->trip_type);
    }

    public function weather()
    {
        return Weather::getOptionsValue($this->weather);
    }
}
