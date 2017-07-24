<?php

namespace App\Model;

use App\Model\UserStyle\Colors;

class UserStyleAdapter extends UserStyle
{
    public function colors(String $colors)
    {
        return Colors::getCheckboxOptionsString($colors);
    }
}
