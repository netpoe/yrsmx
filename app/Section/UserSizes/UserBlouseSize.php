<?php

namespace App\Section\UserSizes;

use App\Section\AbstractUserSizesSection;
use EBM\Field\Field;
use App\Model\UserSizes\BlouseSizes;

class UserBlouseSize extends AbstractUserSizesSection
{
    protected $slug = 'talla-de-blusa';

    protected $template = 'talla-de-blusa';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userSizes = $quiz->userSizes;

        $this->addField('blouse')
            ->setModel($userSizes)
            ->setLabel('Selecciona la talla que usas para tus blusas')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(BlouseSizes::getOptions())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'blouse.*' => 'required|alpha',
        ];
    }
}
