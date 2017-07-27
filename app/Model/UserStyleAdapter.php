<?php

namespace App\Model;

use App\Model\UserStyle\{ Colors, Prints, Fabrics, Words, Accessories, Shoes, Jewelry, Risk };

class UserStyleAdapter extends UserStyle
{
    public function colors()
    {
        return Colors::getCheckboxOptionsString($this->colors);
    }

    public function prints()
    {
        return Prints::getCheckboxOptionsString($this->prints);
    }

    public function fabrics()
    {
        return Fabrics::getCheckboxOptionsString($this->fabrics);
    }

    public function words()
    {
        return Words::getCheckboxOptionsString($this->words);
    }

    public function clothes()
    {
        return Words::getCheckboxOptionsString($this->clothes);
    }

    public function accessories()
    {
        return Accessories::getCheckboxOptionsString($this->accessories);
    }

    public function shoes()
    {
        return Shoes::getCheckboxOptionsString($this->shoes);
    }

    public function jewelry()
    {
        return Jewelry::getCheckboxOptionsString($this->jewelry);
    }

    public function risk()
    {
        return Risk::getCheckboxOptionsString($this->risk);
    }
}
