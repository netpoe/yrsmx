<?php

namespace App\Section\UserStyle;

use EBM\Field\Field;
use App\Section\AbstractUserStyleSection;
use App\Entities\ProductCategory;

use App\Model\{
    Dictionary\DictProductCategoriesAdapter as DictProductCategories
};

class Shoes extends AbstractUserStyleSection
{
    protected $slug = 'zapatos';

    protected $template = 'shoes';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userStyle = $quiz->userStyle;

        $shoes = new ProductCategory(DictProductCategories::SHOES);

        $this->addField('shoes')
            ->setModel($userStyle)
            ->setLabel('Selecciona 1 o más zapatos')
            ->setType(Field::TYPE_CHECKBOX)
            ->setOptions($shoes->getSubcategorysAsInputOptionsArray())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'shoes' => 'required',
            'shoes.*.*' => 'array',
        ];
    }
}
