<?php

namespace App\Section\UserSizes;

use App\Section\AbstractUserSizesSection;
use EBM\Field\Field;
use App\Model\UserSizes\BraBandSizes;
use App\Model\UserSizes\BraCupsSizes;

class UserBraSizes extends AbstractUserSizesSection
{
    protected $slug = 'tallas-de-bra';

    protected $template = 'tallas-de-bra';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

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
            'bra_band.*' => 'required|numeric',
            'bra_cups.*' => 'required|alpha',
        ];
    }
}
