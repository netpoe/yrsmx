<?php

namespace App\Section\UserPreferredBodyParts;

use App\Section\AbstractUserPreferredBodyPartsSection;
use EBM\Field\Field;
use App\Model\UserPreferredBodyParts\BodyType as UserBodyType;

class BodyType extends AbstractUserPreferredBodyPartsSection
{
    protected $slug = 'forma-del-cuerpo';

    protected $template = 'body-type';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userPreferredBodyParts = $quiz->userPreferredBodyParts;

        $this->addField('body_type')
            ->setModel($userPreferredBodyParts)
            ->setLabel('Selecciona la forma del cuerpo que más se asemeje a tu figura')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(UserBodyType::getOptions())
            ->setValueFromDb();

        return $this;
    }
}
