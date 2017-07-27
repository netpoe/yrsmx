<?php

namespace App\Model;

use App\Model\UserStyle\{ Colors, Prints, Fabrics, Words, Accessories, Shoes, Jewelry, Risk };

class UserStyleAdapter extends UserStyle
{
    public function colors(String $colors = '')
    {
        return Colors::getCheckboxOptionsString($this->colors);
    }

    public function prints(String $prints = '')
    {
        return Prints::getCheckboxOptionsString($this->prints);
    }

    public function fabrics(String $fabrics = '')
    {
        return Fabrics::getCheckboxOptionsString($this->fabrics);
    }

    public function words(String $words = '')
    {
        return Words::getCheckboxOptionsString($this->words);
    }

    public function clothes(String $clothes = '')
    {
        return Words::getCheckboxOptionsString($this->clothes);
    }

    public function accessories(String $accessories = '')
    {
        return Accessories::getCheckboxOptionsString($this->accessories);
    }

    public function shoes(String $shoes = '')
    {
        return Shoes::getCheckboxOptionsString($this->shoes);
    }

    public function jewelry(String $jewelry = '')
    {
        return Jewelry::getCheckboxOptionsString($this->jewelry);
    }

    public function risk(String $risk = '')
    {
        return Risk::getCheckboxOptionsString($this->risk);
    }
}
