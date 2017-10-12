<?php

namespace App\Section\QuizGetAway;

use App\Section\AbstractQuizGetAwaySection;
use EBM\Field\Field;
use App\Model\Quiz\GetAway\TripType as UserTripType;
use App\Model\Quiz\GetAway\Destination;
use App\Model\Quiz\GetAway\Weather;

class TripType extends AbstractQuizGetAwaySection
{
    protected $slug = 'tipo-de-viaje';

    protected $template = 'trip-type';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $getAway = $quiz->getAway;

        $this->addField('trip_type')
            ->setModel($getAway)
            ->setLabel('Selecciona 1 opción')
            ->setType(Field::TYPE_RADIO)
            ->setOptions(UserTripType::getOptions())
            ->required()
            ->setValueFromDb();

        $this->setViewParams([
            'displayWeatherField' => false,
            ]);

        if ($getAway->destination == Destination::CITY) {
            $this->addField('weather')
                ->setModel($getAway)
                ->setLabel('¿Qué tipo de clima habrá?')
                ->setType(Field::TYPE_RADIO)
                ->setOptions(Weather::getOptions())
                ->required()
                ->setValueFromDb();

            $this->setViewParams([
                'displayWeatherField' => true,
                ]);
        }

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'trip_type' => 'required',
            'trip_type.*' => 'array',
        ];
    }
}
