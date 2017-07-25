<?php

namespace App\Section\UserStyle;

use App\Section\AbstractUserStyleSection;
use EBM\Field\Field;
use App\Model\UserStyle\Words as UserWords;

class Words extends AbstractUserStyleSection
{
    protected $slug = 'palabras';

    protected $template = 'words';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userStyle = $quiz->userStyle;

        $this->addField('words')
            ->setModel($userStyle)
            ->setLabel('Selecciona 1 o más palabras')
            ->setType(Field::TYPE_CHECKBOX)
            ->setOptions(UserWords::getOptions())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'words' => 'required|array',
        ];
    }
}
