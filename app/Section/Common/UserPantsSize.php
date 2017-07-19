<?php

namespace App\Section\Common;

use App\Section\AbstractUserSizesSection;
use EBM\Field\Field;
use App\Model\UserSizes\PantsSizes;

class UserPantsSize extends AbstractUserSizesSection
{
    protected $slug = 'talla-de-pantalones';

    protected $template = 'talla-de-pantalones';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userSizes = $quiz->userSizes;

        $this->addField('pants')
            ->setModel($userSizes)
            ->setLabel('Selecciona tu talla preferida para pantalones')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(PantsSizes::getOptions())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'pants' => 'required|numeric',
        ];
    }
}
