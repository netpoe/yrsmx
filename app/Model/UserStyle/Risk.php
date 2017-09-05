<?php

namespace App\Model\UserStyle;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

use App\Model\{
    UserStyleAdapter,
    LuProductCategoriesAdapter as LuProductCategories
};

class Risk extends UserStyleAdapter implements InputOptionsContract
{
    use InputOptionsTrait;

    const CATEGORY_ID = LuProductCategories::RISK;

    const COLUMN = 'risk';

    const FIRST = 1;
    const TRENDY = 2;
    const ORIGINAL = 3;
    const CLASSIC = 4;

    const OPTIONS = [
        self::FIRST => [
            'key' => self::FIRST,
            'value' => 'Generalmente soy la primera de mis amigas en probar nuevos estilos y tendencias.',
        ],
        self::TRENDY => [
            'key' => self::TRENDY,
            'value' => 'A veces me gusta probar nuevas tendencias.',
        ],
        self::ORIGINAL => [
            'key' => self::ORIGINAL,
            'value' => 'La mayor parte de mi ropa son básicos pero tengo algunas piezas originales que resaltan.',
        ],
        self::CLASSIC => [
            'key' => self::CLASSIC,
            'value' => 'Soy muy clásica, prefiero apegarme a lo básico.',
        ],
    ];
}
