<?php

namespace App\Section\UserStyle;

use App\Section\AbstractUserStyleSection;
use EBM\Field\Field;
use App\Model\UserStyle\Accessories as UserAccessories;

class Accessories extends AbstractUserStyleSection
{
    protected $slug = 'accesorios';

    protected $template = 'accessories';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userStyle = $quiz->userStyle;

        $this->addField('accessories')
            ->setModel($userStyle)
            ->setLabel('Selecciona 1 o más accesorios')
            ->setType(Field::TYPE_CHECKBOX)
            ->setOptions(UserAccessories::getOptions())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'accessories.*.*' => 'required|arrays',
        ];
    }
}
