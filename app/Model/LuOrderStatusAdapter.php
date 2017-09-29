<?php

namespace App\Model;

use App\Form\Contract\InputOptionsContract;
use App\Form\Traits\InputOptionsTrait;

class LuOrderStatusAdapter extends LuOrderStatus implements InputOptionsContract
{
    use InputOptionsTrait;

    const PENDING = 1;
    const PAID = 2;
    const IN_TRANSIT = 3;
    const DELIVERED = 4;
    const REJECTED = 5;
    const RETURNED_NO_FIT = 6;
    const RETURNED_IN_TRANSIT = 7;
    const RETURNED_IN_WAREHOUSE = 8;

    const OPTIONS = [
        self::PENDING => [
            'key' => self::PENDING,
            'value' => 'Pendiente',
        ],
        self::PAID => [
            'key' => self::PAID,
            'value' => 'Pagada',
        ],
        self::IN_TRANSIT => [
            'key' => self::IN_TRANSIT,
            'value' => 'En tránsito',
        ],
        self::DELIVERED => [
            'key' => self::DELIVERED,
            'value' => 'Entregada',
        ],
        self::REJECTED => [
            'key' => self::REJECTED,
            'value' => 'Rechazada',
        ],
        self::RETURNED_NO_FIT => [
            'key' => self::RETURNED_NO_FIT,
            'value' => 'Devuelta, no le quedó',
        ],
        self::RETURNED_IN_TRANSIT => [
            'key' => self::RETURNED_IN_TRANSIT,
            'value' => 'Devuelta, en tránsito',
        ],
        self::RETURNED_IN_WAREHOUSE => [
            'key' => self::RETURNED_IN_WAREHOUSE,
            'value' => 'Devuelta, en almacén',
        ],
    ];
}
