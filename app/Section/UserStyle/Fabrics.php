<?php

namespace App\Section\UserStyle;

use EBM\Field\Field;
use App\Section\AbstractUserStyleSection;
use App\Entities\ProductAttribute;

use App\Model\{
    Dictionary\LuProductAttributesAdapter as LuProductAttributes
};

class Fabrics extends AbstractUserStyleSection
{
    protected $slug = 'telas';

    protected $template = 'fabrics';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userStyle = $quiz->userStyle;

        $fabrics = new ProductAttribute(LuProductAttributes::FABRICS);

        $this->addField('fabrics')
            ->setModel($userStyle)
            ->setLabel('Selecciona 1 o más estampados')
            ->setType(Field::TYPE_CHECKBOX)
            ->setOptions($fabrics->getSubattributesAsInputOptionsArray())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'fabrics' => 'required',
            'fabrics.*.*' => 'array',
        ];
    }
}
