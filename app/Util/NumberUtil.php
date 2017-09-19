<?php

namespace App\Util;

class NumberUtil
{
    public $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function raw()
    {
        return $this->number;
    }

    public function toCurrency()
    {
        return '$' . number_format($this->number, 2);
    }

    public function toPercentage()
    {
        if (!$this->number) {
            return null;
        }

        return $this->number * 100;
    }

    public function toPercentageString()
    {
        if (!$this->toPercentage()) {
            return null;
        }

        return (string) $this->toPercentage() . '%';
    }
}
