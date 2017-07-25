<?php

namespace App\Section\UserStyle;

use App\Section\AbstractUserStyleSection;
use EBM\Field\Field;
use App\Model\UserStyle\Clothes as UserClothes;

class Clothes extends AbstractUserStyleSection
{
    protected $slug = 'prendas';

    protected $template = 'clothes';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userStyle = $quiz->userStyle;

        $this->addField('clothes')
            ->setModel($userStyle)
            ->setLabel('Selecciona 1 o más prendas')
            ->setType(Field::TYPE_CHECKBOX)
            ->setOptions(UserClothes::getOptions())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'clothes' => 'required',
            'clothes.*.*' => 'numeric',
        ];
    }
}
