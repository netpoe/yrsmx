<?php

namespace App\Section\UserInfo;

use App\Section\AbstractUserInfoSection;
use EBM\Field\Field;

class BasicInfo extends AbstractUserInfoSection
{
    protected $slug = 'datos-basicos';

    protected $template = 'basic-info';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $userInfo = $user->info;

        $this->addField('dob')
            ->setModel($userInfo)
            ->setLabel('Fecha de nacimiento')
            ->setType(Field::TYPE_TEXT)
            ->required()
            ->setValueFromDb();

        $this->addField('name')
            ->setModel($userInfo)
            ->setLabel('¿Cómo te llamas?')
            ->setType(Field::TYPE_TEXT)
            ->required()
            ->setValueFromDb();

        $this->addField('paternal_last_name')
            ->setModel($userInfo)
            ->setLabel('¿Cuál es tu apellido paterno?')
            ->setType(Field::TYPE_TEXT)
            ->required()
            ->setValueFromDb();

        $this->addField('maternal_last_name')
            ->setModel($userInfo)
            ->setLabel('¿Cuál es tu apellido materno?')
            ->setType(Field::TYPE_TEXT)
            ->required()
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'name' => 'required|regex:/^[^\d]*/',
            'paternal_last_name' => 'required|regex:/^[^\d]*/',
            'maternal_last_name' => 'required|regex:/^[^\d]*/',
            'dob' => 'required|date',
        ];
    }
}
