<?php

namespace App\Model\User;

class UserSizesAdapter extends UserSizes
{
    public function weight()
    {
        return $this->weight . ' kg.';
    }

    public function height()
    {
        return $this->height . ' m.';
    }
}
