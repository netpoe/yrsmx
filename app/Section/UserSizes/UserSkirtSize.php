<?php

namespace App\Section\UserSizes;

use App\Section\AbstractUserSizesSection;
use EBM\Field\Field;
use App\Model\UserSizes\SkirtSizes;

class UserSkirtSize extends AbstractUserSizesSection
{
    protected $slug = 'talla-de-falda';

    protected $template = 'talla-de-falda';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userSizes = $quiz->userSizes;

        $this->addField('skirt')
            ->setModel($userSizes)
            ->setLabel('Selecciona tu talla preferida para las faldas')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(SkirtSizes::getOptions())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'skirt.*' => 'required|alpha',
        ];
    }
}
