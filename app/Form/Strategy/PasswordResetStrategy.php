<?php

namespace App\Form\Strategy;

use EBM\Field\Field;
use Illuminate\Support\Facades\Hash;
use App\Util\DateTimeUtil;

class PasswordResetStrategy
{
    public static function reset(Field $field)
    {
        $value = $field->getValue();

        $field->setValue(Hash::make($value));

        $model = $field->getModel();

        $model->updated_password_ts = DateTimeUtil::DBNOW();

        $model->save();

        return $field->save();
    }
}
