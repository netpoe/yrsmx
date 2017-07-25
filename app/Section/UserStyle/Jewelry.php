<?php

namespace App\Section\UserStyle;

use App\Section\AbstractUserStyleSection;
use EBM\Field\Field;
use App\Model\UserStyle\Jewelry as UserJewelry;

class Jewelry extends AbstractUserStyleSection
{
    protected $slug = 'joyas';

    protected $template = 'jewelry';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userStyle = $quiz->userStyle;

        $this->addField('jewelry')
            ->setModel($userStyle)
            ->setLabel('Selecciona 1 o más joyas')
            ->setType(Field::TYPE_CHECKBOX)
            ->required()
            ->setOptions(UserJewelry::getOptions())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'jewelry' => 'required',
            'jewelry.*.*' => 'array',
        ];
    }
}
