<?php

namespace App\Form\Front;

use EBM\Form\AbstractBaseForm;
use EBM\Field\Field;

use App\Model\{
    OutfitType,
    Dictionary\DictProductAttributesAdapter as DictProductAttributes
};

use App\Entities\ProductAttribute;

class NewQuizForm extends AbstractBaseForm
{
    public function setOnPostActionString()
    {
        $this->onPostActionString = route('front.quiz.create');

        return $this;
    }

    public function setFields()
    {
        $outfitType = new ProductAttribute(DictProductAttributes::OUTFIT_TYPE);

        $this->addField('outfit_type')
            ->setLabel('¿Qué tipo de outfit buscas?')
            ->setType(Field::TYPE_RADIO)
            ->setOptions($outfitType->getSubattributesAsInputOptionsArray())
            ->required();

        $this->addField('email')
            ->setLabel('¿A qué correo te enviamos tu selección?')
            ->setType(Field::TYPE_EMAIL)
            ->required()
            ->setPlaceholder('email@email.com');

        return $this;
    }
}
