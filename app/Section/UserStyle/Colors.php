<?php

namespace App\Section\UserStyle;

use App\Section\AbstractUserStyleSection;
use EBM\Field\Field;
use App\Model\UserStyle\Colors as UserColors;

class Colors extends AbstractUserStyleSection
{
    protected $slug = 'colores';

    protected $template = 'colors';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userStyle = $quiz->userStyle;

        $this->addField('colors')
            ->setModel($userStyle)
            ->setLabel('Selecciona 1 o más colores')
            ->setType(Field::TYPE_CHECKBOX)
            ->setOptions(UserColors::getOptions())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'colors' => 'required|array',
        ];
    }
}
