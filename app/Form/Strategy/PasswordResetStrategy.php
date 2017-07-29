<?php

namespace App\Form\Strategy;

use EBM\Field\Field;
use Illuminate\Support\Facades\Hash;

class PasswordResetStrategy
{
    public static function reset(Field $field)
    {
        $value = $field->getValue();

        $field->setValue(Hash::make($value));

        return $field->save();
    }
}
