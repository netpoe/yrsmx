<?php

namespace App\Section\UserStyle;

use App\Section\AbstractUserStyleSection;
use EBM\Field\Field;
use App\Model\UserStyle\Prints as UserPrints;

class Prints extends AbstractUserStyleSection
{
    protected $slug = 'estampados';

    protected $template = 'prints';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userStyle = $quiz->userStyle;

        $this->addField('prints')
            ->setModel($userStyle)
            ->setLabel('Selecciona 1 o más estampados')
            ->setType(Field::TYPE_CHECKBOX)
            ->setOptions(UserPrints::getOptions())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'prints' => 'required',
            'prints.*.*' => 'array',
        ];
    }
}
