<?php

namespace App\Section\UserInfo;

use App\Section\AbstractUserInfoSection;
use EBM\Field\Field;
use App\Form\Strategy\PasswordResetStrategy;

class Password extends AbstractUserInfoSection
{
    protected $slug = 'escoge-una-contrasena';

    protected $template = 'password';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $this->addField('password')
            ->setModel($user)
            ->setLabel('Escoge una contraseña')
            ->setType('password')
            ->required()
            ->setSaveStrategy(array(PasswordResetStrategy::class, 'reset'))
            ->setHint('Intenta utilizar una combinación de letras, números y caracteres especiales');

        $this->addField('password_confirmation')
            ->setModel($user)
            ->setLabel('Confirma tu contraseña')
            ->setType('password')
            ->unset()
            ->required();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'password' => 'required|confirmed|string',
            'password_confirmation' => 'required|string'
        ];
    }
}
