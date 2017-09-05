<?php

namespace App\Section\UserStyle;

use EBM\Field\Field;
use App\Section\AbstractUserStyleSection;
use App\Entities\ProductAttribute;

use App\Model\{
    LuProductAttributesAdapter as LuProductAttributes
};

class Jewelry extends AbstractUserStyleSection
{
    protected $slug = 'joyas';

    protected $template = 'jewelry';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userStyle = $quiz->userStyle;

        $jewelry = new ProductAttribute(LuProductAttributes::JEWELRY);

        $this->addField('jewelry')
            ->setModel($userStyle)
            ->setLabel('Selecciona 1 o más joyas')
            ->setType(Field::TYPE_CHECKBOX)
            ->required()
            ->setOptions($jewelry->getSubattributesAsInputOptionsArray())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'jewelry' => 'required',
            'jewelry.*.*' => 'array',
        ];
    }
}
