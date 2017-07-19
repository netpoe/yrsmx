<?php

namespace App\Section\Common;

use App\Section\AbstractQuizSection;
use EBM\Field\Field;
use App\Model\UserSizes\BraBandSizes;
use App\Model\UserSizes\BraCupsSizes;

class UserBraSizes extends AbstractQuizSection
{
    protected $slug = 'tallas-de-bra';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $user->getLastQuiz();

        $userSizes = $quiz->userSizes;

        $this->addField('bra_band')
            ->setModel($userSizes)
            ->setLabel('Selecciona tu talla de espalda')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(BraBandSizes::getOptions())
            ->setValueFromDb();

        $this->addField('bra_cups')
            ->setModel($userSizes)
            ->setLabel('Selecciona tu talla de copa')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(BraCupsSizes::getOptions())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'bra_band' => 'required|numeric',
            'bra_cups' => 'required|alpha',
        ];
    }
}
