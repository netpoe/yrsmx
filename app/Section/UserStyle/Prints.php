<?php

namespace App\Section\UserStyle;

use EBM\Field\Field;
use App\Section\AbstractUserStyleSection;
use App\Entities\ProductAttribute;

use App\Model\{
    Dictionary\LuProductAttributesAdapter as LuProductAttributes
};

class Prints extends AbstractUserStyleSection
{
    protected $slug = 'estampados';

    protected $template = 'prints';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userStyle = $quiz->userStyle;

        $prints = new ProductAttribute(LuProductAttributes::PRINTS);

        $this->addField('prints')
            ->setModel($userStyle)
            ->setLabel('Selecciona 1 o más estampados')
            ->setType(Field::TYPE_CHECKBOX)
            ->setOptions($prints->getSubattributesAsInputOptionsArray())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'prints' => 'required',
            'prints.*.*' => 'array',
        ];
    }
}
