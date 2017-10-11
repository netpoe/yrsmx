<?php

namespace App\Model\User;

class UserInfoAdapter extends UserInfo
{
    public function fullName()
    {
        return "$this->name $this->paternal_last_name $this->maternal_last_name";
    }

    public function age()
    {
        $m = new \Moment\Moment($this->dob);

        return $m->fromNow()->getYears() . ' años';
    }
}
