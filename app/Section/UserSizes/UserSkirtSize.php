<?php

namespace App\Section\UserSizes;

use App\Section\AbstractUserSizesSection;
use EBM\Field\Field;
use App\Entities\ProductCategory;

use App\Model\{
    Dictionary\DictProductCategoriesAdapter as DictProductCategories
};

class UserSkirtSize extends AbstractUserSizesSection
{
    protected $slug = 'talla-de-falda';

    protected $template = 'talla-de-falda';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userSizes = $quiz->userSizes;

        $skirtSizes = new ProductCategory(DictProductCategories::SIZE_SKIRT);

        $this->addField('skirt')
            ->setModel($userSizes)
            ->setLabel('Selecciona tu talla preferida para las faldas')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($skirtSizes->getSubcategorysAsInputOptionsArray())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'skirt.*' => 'required|alpha',
        ];
    }
}
