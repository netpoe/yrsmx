<?php

namespace App\Model;

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
