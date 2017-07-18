<?php

namespace App\Section\Common;

use EBM\Section\AbstractBaseSection;

class UserWeightHeight extends AbstractBaseSection
{
    protected $slug = 'altura-y-peso';

    public function setFields()
    {
        return $this;
    }
}
