<?php

namespace App\Section\UserPreferredBodyParts;

use App\Section\AbstractUserPreferredBodyPartsSection;
use EBM\Field\Field;

class BodyParts extends AbstractUserPreferredBodyPartsSection
{
    protected $slug = 'partes-del-cuerpo';

    protected $template = 'body-parts';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userPreferredBodyParts = $quiz->userPreferredBodyParts;

        $this->addField('thighs')
            ->setModel($userPreferredBodyParts)
            ->setLabel('Muslos')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(parent::BINARY_OPTIONS)
            ->setValueFromDb();

        $this->addField('calves')
            ->setModel($userPreferredBodyParts)
            ->setLabel('Pantorrillas')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(parent::BINARY_OPTIONS)
            ->setValueFromDb();

        $this->addField('abdomen')
            ->setModel($userPreferredBodyParts)
            ->setLabel('Abdomen')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(parent::BINARY_OPTIONS)
            ->setValueFromDb();

        $this->addField('hips')
            ->setModel($userPreferredBodyParts)
            ->setLabel('Cadera')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(parent::BINARY_OPTIONS)
            ->setValueFromDb();

        $this->addField('butt')
            ->setModel($userPreferredBodyParts)
            ->setLabel('Pompas')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(parent::BINARY_OPTIONS)
            ->setValueFromDb();

        $this->addField('shoulders')
            ->setModel($userPreferredBodyParts)
            ->setLabel('Hombros')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(parent::BINARY_OPTIONS)
            ->setValueFromDb();

        $this->addField('breast')
            ->setModel($userPreferredBodyParts)
            ->setLabel('Busto')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(parent::BINARY_OPTIONS)
            ->setValueFromDb();

        $this->addField('arms')
            ->setModel($userPreferredBodyParts)
            ->setLabel('Brazos')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions(parent::BINARY_OPTIONS)
            ->setValueFromDb();

        return $this;
    }
}
