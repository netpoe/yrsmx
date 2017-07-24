<?php

namespace App\Model;

use App\Model\UserStyle\Colors;
use App\Model\UserStyle\Prints;
use App\Model\UserStyle\Fabrics;

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
}
