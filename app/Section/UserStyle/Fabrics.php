<?php

namespace App\Section\UserStyle;

use App\Section\AbstractUserStyleSection;
use EBM\Field\Field;
use App\Model\UserStyle\Fabrics as UserFabrics;

class Fabrics extends AbstractUserStyleSection
{
    protected $slug = 'telas';

    protected $template = 'fabrics';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userStyle = $quiz->userStyle;

        $this->addField('fabrics')
            ->setModel($userStyle)
            ->setLabel('Selecciona 1 o más estampados')
            ->setType(Field::TYPE_CHECKBOX)
            ->setOptions(UserFabrics::getOptions())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'fabrics' => 'required',
            'fabrics.*.*' => 'array',
        ];
    }
}
