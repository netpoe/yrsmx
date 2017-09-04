<?php

namespace App\Model;

use App\Model\UserFit\UpperPartFit;
use App\Model\UserFit\LowerPartFit;
use App\Model\UserFit\PantsFitShape;
use App\Model\UserFit\PantsFitHips;

class UserFitAdapter extends UserFit
{
    public function getQuizRelationshipMethodName()
    {
        return $this->quizRelationshipMethodName;
    }

    public function upperPartFit()
    {
        return UpperPartFit::getOptionsValue($this->upper_part_fit);
    }

    public function lowerPartFit()
    {
        return LowerPartFit::getOptionsValue($this->lower_part_fit);
    }

    public function pantsFitShape()
    {
        return PantsFitShape::getOptionsValue($this->pants_fit_shape);
    }

    public function pantsFitHips()
    {
        return PantsFitHips::getOptionsValue($this->pants_fit_hips);
    }
}
