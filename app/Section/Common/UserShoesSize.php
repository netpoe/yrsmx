<?php

namespace App\Section\Common;

use App\Section\AbstractQuizSection;
use EBM\Field\Field;
use App\Model\UserSizes\ShoesSizes;

class UserShoesSize extends AbstractQuizSection
{
    protected $slug = 'talla-de-zapatos';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $user->getLastQuiz();

        $userSizes = $quiz->userSizes;

        $this->addField('shoes')
            ->setModel($userSizes)
            ->setLabel('Selecciona tu talla preferida de zapatos')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(ShoesSizes::getOptions())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'shoes' => 'required|numeric',
        ];
    }
}
