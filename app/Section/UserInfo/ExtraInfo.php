<?php

namespace App\Section\UserInfo;

use App\Section\AbstractUserInfoSection;
use EBM\Field\Field;

class ExtraInfo extends AbstractUserInfoSection
{
    protected $slug = 'datos-adicionales';

    protected $template = 'extra-info';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $userInfo = $user->info;

        $this->addField('occupation')
            ->setModel($userInfo)
            ->setLabel('¿A qué te dedicas?')
            ->setType(Field::TYPE_TEXT)
            ->setPlaceholder('Máximo 350 caracteres')
            ->setValueFromDb();

        $this->addField('extras')
            ->setModel($userInfo)
            ->setLabel('¿Hay algo más que quieres que sepamos de ti?')
            ->setType(Field::TYPE_TEXT)
            ->setPlaceholder('Máximo 350 caracteres')
            ->required()
            ->setHint('eg. Mi trabajo es casual pero me gusta arriesgarme con piezas originales, me gustan más los colores cálidos y nunca uso azul, los cuellos halter no me favorecen, estoy embarazada y llevo 6 meses para que lo consideren, etc.')
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'occupation' => 'required|regex:/^[^\d\\-_]*/|between:1,350',
            'extras' => 'regex:/^[^\d\\-_\/]*/|between:1,350',
        ];
    }
}
