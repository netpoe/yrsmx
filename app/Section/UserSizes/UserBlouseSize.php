<?php

namespace App\Section\UserSizes;

use EBM\Field\Field;
use App\Section\AbstractUserSizesSection;
use App\Entities\ProductCategory;

use App\Model\{
    Dictionary\DictProductCategoriesAdapter as DictProductCategories
};

class UserBlouseSize extends AbstractUserSizesSection
{
    protected $slug = 'talla-de-blusa';

    protected $template = 'talla-de-blusa';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $quiz = $this->getUIApplication()->getInstance('quiz');

        $userSizes = $quiz->userSizes;

        $blouseSizes = new ProductCategory(DictProductCategories::SIZE_BLOUSE);

        $this->addField('blouse')
            ->setModel($userSizes)
            ->setLabel('Selecciona la talla que usas para tus blusas')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setOptions($blouseSizes->getSubcategorysAsInputOptionsArray())
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules(): Array
    {
        return [
            'blouse.*' => 'required|alpha',
        ];
    }
}
