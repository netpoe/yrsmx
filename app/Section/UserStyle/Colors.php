<?php

namespace App\Section\UserStyle;

use EBM\Field\Field;
use App\Section\AbstractUserStyleSection;
use App\Entities\ProductAttribute;

use App\Model\{
    Dictionary\DictProductAttributesAdapter as DictProductAttributes
};

class Colors extends AbstractUserStyleSection
{
    protected $slug = 'colores';

    protected $template = 'colors';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userStyle = $quiz->userStyle;

        $colors = new ProductAttribute(DictProductAttributes::COLORS);

        $this->addField('colors')
            ->setModel($userStyle)
            ->setLabel('Selecciona 1 o más colores')
            ->setType(Field::TYPE_CHECKBOX)
            ->setOptions($colors->getSubattributesAsInputOptionsArray())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'colors' => 'required',
            'colors.*.*' => 'array',
        ];
    }
}
