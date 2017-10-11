<?php

namespace App\Model\User;

use App\Model\User\PreferredBodyParts\BodyType;

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
