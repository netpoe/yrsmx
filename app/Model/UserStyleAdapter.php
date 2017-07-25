<?php

namespace App\Model;

use App\Model\UserStyle\Colors;
use App\Model\UserStyle\Prints;
use App\Model\UserStyle\Fabrics;
use App\Model\UserStyle\Words;

class UserStyleAdapter extends UserStyle
{
    public function colors(String $colors = '')
    {
        return Colors::getCheckboxOptionsString($colors);
    }

    public function prints(String $prints = '')
    {
        return Prints::getCheckboxOptionsString($prints);
    }

    public function fabrics(String $fabrics = '')
    {
        return Fabrics::getCheckboxOptionsString($fabrics);
    }

    public function words(String $words = '')
    {
        return Words::getCheckboxOptionsString($words);
    }
}
