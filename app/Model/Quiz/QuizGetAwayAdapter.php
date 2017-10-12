<?php

namespace App\Model\Quiz;

use App\Model\Quiz\GetAway\Destination;
use App\Model\Quiz\GetAway\TripType;
use App\Model\Quiz\GetAway\Weather;

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
