<?php

namespace App\Section\UserStyle;

use App\Section\AbstractUserStyleSection;
use EBM\Field\Field;
use App\Model\UserStyle\Shoes as UserShoes;

class Shoes extends AbstractUserStyleSection
{
    protected $slug = 'zapatos';

    protected $template = 'shoes';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userStyle = $quiz->userStyle;

        $this->addField('shoes')
            ->setModel($userStyle)
            ->setLabel('Selecciona 1 o más zapatos')
            ->setType(Field::TYPE_CHECKBOX)
            ->setOptions(UserShoes::getOptions())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'shoes.*.*' => 'required|arrays',
        ];
    }
}
