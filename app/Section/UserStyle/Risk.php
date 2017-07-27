<?php

namespace App\Section\UserStyle;

use App\Section\AbstractUserStyleSection;
use EBM\Field\Field;
use App\Model\UserStyle\Risk as UserRisk;

class Risk extends AbstractUserStyleSection
{
    protected $slug = 'riesgo';

    protected $template = 'risk';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userStyle = $quiz->userStyle;

        $this->addField('risk')
            ->setModel($userStyle)
            ->setLabel('Selecciona 1 o más opciones')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(UserRisk::getOptions())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'risk' => 'required',
            'risk.*' => 'required|array',
        ];
    }
}
