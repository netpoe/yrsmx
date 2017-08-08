<?php

namespace App\Model;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;
use App\Model\LuProductCategoriesAdapter as LuProductCategories;
use App\Model\UserPreferredBodyParts\BodyType;

class LuProductSubcategoriesAdapter extends LuProductSubcategories implements InputOptionsContract
{
    use InputOptionsTrait;

    const OPTIONS = [
        // CATEGORY::TYPE
        [
            'key' => LuProductCategories::TYPE,
            'value' => 'bra',
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => LuProductCategories::TYPE,
            'value' => 'dress',
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => LuProductCategories::TYPE,
            'value' => 'skirt',
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => LuProductCategories::TYPE,
            'value' => 'shoes',
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => LuProductCategories::TYPE,
            'value' => 'pants',
            'category_id' => LuProductCategories::TYPE,
        ],
        [
            'key' => LuProductCategories::TYPE,
            'value' => 'accesories',
            'category_id' => LuProductCategories::TYPE,
        ],

        // CATEGORY::BODY_PART
        [
            'key' => LuProductCategories::BODY_PART,
            'value' => 'thighs',
            'category_id' => LuProductCategories::BODY_PART,
        ],
        [
            'key' => LuProductCategories::BODY_PART,
            'value' => 'calves',
            'category_id' => LuProductCategories::BODY_PART,
        ],
        [
            'key' => LuProductCategories::BODY_PART,
            'value' => 'butt',
            'category_id' => LuProductCategories::BODY_PART,
        ],
        [
            'key' => LuProductCategories::BODY_PART,
            'value' => 'abdomen',
            'category_id' => LuProductCategories::BODY_PART,
        ],
        [
            'key' => LuProductCategories::BODY_PART,
            'value' => 'hips',
            'category_id' => LuProductCategories::BODY_PART,
        ],
        [
            'key' => LuProductCategories::BODY_PART,
            'value' => 'breast',
            'category_id' => LuProductCategories::BODY_PART,
        ],
        [
            'key' => LuProductCategories::BODY_PART,
            'value' => 'shoulders',
            'category_id' => LuProductCategories::BODY_PART,
        ],
        [
            'key' => LuProductCategories::BODY_PART,
            'value' => 'arms',
            'category_id' => LuProductCategories::BODY_PART,
        ],

        // CATEGORY::BODY_TYPE
        [
            'key' => LuProductCategories::BODY_TYPE,
            'value' => BodyType::OPTIONS[BodyType::TRIANGLE]['alias'],
            'category_id' => LuProductCategories::BODY_TYPE,
        ],
        [
            'key' => LuProductCategories::BODY_TYPE,
            'value' => BodyType::OPTIONS[BodyType::ELIPTICAL]['alias'],
            'category_id' => LuProductCategories::BODY_TYPE,
        ],
        [
            'key' => LuProductCategories::BODY_TYPE,
            'value' => BodyType::OPTIONS[BodyType::INVERTED_TRIANGLE]['alias'],
            'category_id' => LuProductCategories::BODY_TYPE,
        ],
        [
            'key' => LuProductCategories::BODY_TYPE,
            'value' => BodyType::OPTIONS[BodyType::RECTANGLE]['alias'],
            'category_id' => LuProductCategories::BODY_TYPE,
        ],
        [
            'key' => LuProductCategories::BODY_TYPE,
            'value' => BodyType::OPTIONS[BodyType::SAND_WATCH]['alias'],
            'category_id' => LuProductCategories::BODY_TYPE,
        ],

        // CATEGORY::FIT
        [
            'key' => LuProductCategories::FIT,
            'value' => 'upper_part_fit',
            'category_id' => LuProductCategories::FIT,
        ],
        [
            'key' => LuProductCategories::FIT,
            'value' => 'lower_part_fit',
            'category_id' => LuProductCategories::FIT,
        ],
        [
            'key' => LuProductCategories::FIT,
            'value' => 'pants_fit_shape',
            'category_id' => LuProductCategories::FIT,
        ],
        [
            'key' => LuProductCategories::FIT,
            'value' => 'pants_fit_hips',
            'category_id' => LuProductCategories::FIT,
        ],
    ];
}
