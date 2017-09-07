<?php

namespace App\Model;

use App\Model\UserStyle\{ Colors, Prints, Fabrics, Words, Accessories, Shoes, Jewelry, Risk };

class UserStyleAdapter extends UserStyle
{
    public function colors()
    {
        return Colors::getSubattributeValuesString($this->colors);
    }

    public function prints()
    {
        return Prints::getSubattributeValuesString($this->prints);
    }

    public function fabrics()
    {
        return Fabrics::getSubattributeValuesString($this->fabrics);
    }

    public function words()
    {
        return Words::getSubattributeValuesString($this->words);
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
        return Jewelry::getSubattributeValuesString($this->jewelry);
    }

    public function risk()
    {
        return Risk::getCheckboxOptionsString($this->risk);
    }
}
