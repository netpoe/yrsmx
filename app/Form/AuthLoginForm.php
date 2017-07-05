<?php

namespace App\Form;

use EBM\Form\AbstractBaseForm;
use EBM\Field\Field;

class AuthLoginForm extends AbstractBaseForm
{
    public function setOnPostActionString()
    {
        $this->onPostActionString = route('admin.auth.login');

        return $this;
    }

    public function setFields()
    {
        $this->addField('email')
            ->setLabel('Correo electrónico')
            ->setType(Field::TYPE_EMAIL)
            ->required()
            ->setPlaceholder('email@email.com');

        $this->addField('password')
            ->setLabel('Contraseña')
            ->setType('password')
            ->required();

        return $this;
    }
}
