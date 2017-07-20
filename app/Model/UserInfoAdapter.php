<?php

namespace App\Model;

class UserInfoAdapter extends UserInfo
{
    public function fullName()
    {
        return "$this->name $this->paternal_last_name $this->maternal_last_name";
    }
}
