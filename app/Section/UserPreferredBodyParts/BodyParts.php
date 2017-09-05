<?php

namespace App\Section\UserPreferredBodyParts;

use EBM\Field\Field;
use App\Section\AbstractUserPreferredBodyPartsSection;
use App\Entities\ProductAttribute;

use App\Model\{
    LuProductAttributesAdapter as LuProductAttributes
};

class BodyParts extends AbstractUserPreferredBodyPartsSection
{
    protected $slug = 'partes-del-cuerpo';

    protected $template = 'body-parts';

    public $bodyPartsAttribute;

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userPreferredBodyParts = $quiz->userPreferredBodyParts;

        $this->bodyPartsAttribute = new ProductAttribute(LuProductAttributes::BODY_PART);

        $bodyPartsModel = $this->bodyPartsAttribute->getSubattributeModelName();

        $this->addField('thighs')
            ->setModel($userPreferredBodyParts)
            ->setLabel('Muslos')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($this->getBodyPartsRadioOptions($bodyPartsModel::THIGHS))
            ->setValueFromDb();

        $this->addField('calves')
            ->setModel($userPreferredBodyParts)
            ->setLabel('Pantorrillas')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($this->getBodyPartsRadioOptions($bodyPartsModel::CALVES))
            ->setValueFromDb();

        $this->addField('abdomen')
            ->setModel($userPreferredBodyParts)
            ->setLabel('Abdomen')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($this->getBodyPartsRadioOptions($bodyPartsModel::ABDOMEN))
            ->setValueFromDb();

        $this->addField('hips')
            ->setModel($userPreferredBodyParts)
            ->setLabel('Cadera')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($this->getBodyPartsRadioOptions($bodyPartsModel::HIPS))
            ->setValueFromDb();

        $this->addField('butt')
            ->setModel($userPreferredBodyParts)
            ->setLabel('Pompas')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($this->getBodyPartsRadioOptions($bodyPartsModel::BUTT))
            ->setValueFromDb();

        $this->addField('shoulders')
            ->setModel($userPreferredBodyParts)
            ->setLabel('Hombros')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($this->getBodyPartsRadioOptions($bodyPartsModel::SHOULDERS))
            ->setValueFromDb();

        $this->addField('breast')
            ->setModel($userPreferredBodyParts)
            ->setLabel('Busto')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($this->getBodyPartsRadioOptions($bodyPartsModel::BREAST))
            ->setValueFromDb();

        $this->addField('arms')
            ->setModel($userPreferredBodyParts)
            ->setLabel('Brazos')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($this->getBodyPartsRadioOptions($bodyPartsModel::ARMS))
            ->setValueFromDb();

        return $this;
    }

    public function getBodyPartsRadioOptions(Int $bodyPartKey): Array
    {
        return [
            [
                'key' => NULL,
                'value' => 'Disimular',
            ],
            [
                'key' => $this->bodyPartsAttribute->getSubattributeByKey($bodyPartKey)->getId(),
                'value' => 'Resaltar',
            ],
        ];
    }
}
