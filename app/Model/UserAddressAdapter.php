<?php

namespace App\Model;

class UserAddressAdapter extends UserAddress
{
    public function toString(): String
    {
        return implode('', [
            "$this->street, ",
            "int. $this->interior. ",
            "Col. $this->neighborhood, ",
            "$this->city. ",
            "{$this->state->value}, ",
            "{$this->country->value}. ",
            "CP. $this->zip_code. ",
        ]);
    }
}
