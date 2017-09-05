<?php

namespace App\Section\UserStyle;

use EBM\Field\Field;
use App\Section\AbstractUserStyleSection;
use App\Entities\ProductAttribute;

use App\Model\{
    LuProductAttributesAdapter as LuProductAttributes
};

class Words extends AbstractUserStyleSection
{
    protected $slug = 'palabras';

    protected $template = 'words';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userStyle = $quiz->userStyle;

        $words = new ProductAttribute(LuProductAttributes::WORDS);

        $this->addField('words')
            ->setModel($userStyle)
            ->setLabel('Selecciona 1 o más palabras')
            ->setType(Field::TYPE_CHECKBOX)
            ->setOptions($words->getSubattributesAsInputOptionsArray())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'words' => 'required',
            'words.*.*' => 'array',
        ];
    }
}
