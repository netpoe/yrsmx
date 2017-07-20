<?php

namespace App\Model;

use App\Model\UserFit\UpperPartFit;
use App\Model\UserFit\LowerPartFit;
use App\Model\UserFit\PantsFitShape;
use App\Model\UserFit\PantsFitHips;

class UserFitAdapter extends UserFit
{
    public function upperPartFit($value)
    {
        return UpperPartFit::getOptionsValue($value);
    }

    public function lowerPartFit($value)
    {
        return LowerPartFit::getOptionsValue($value);
    }

    public function pantsFitShape($value)
    {
        return PantsFitShape::getOptionsValue($value);
    }

    public function pantsFitHips($value)
    {
        return PantsFitHips::getOptionsValue($value);
    }
}
