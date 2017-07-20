<?php

namespace App\Model;

use App\Model\UserPreferredBodyParts\BodyType;

class UserPreferredBodyPartsAdapter extends UserPreferredBodyParts
{
    public function bodyType()
    {
        return BodyType::getOptionsValue($this->body_type);
    }

    public function showOrHide($value)
    {
        if ($value) {
            return 'Resaltar';
        }

        return 'Disimular';
    }
}
