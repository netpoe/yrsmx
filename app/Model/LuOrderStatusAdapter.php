<?php

namespace App\Model;

class LuOrderStatusAdapter extends LuOrderStatus
{
    const STATUS_PENDING = 1;
    const STATUS_PAID = 2;
    const IN_TRANSIT = 3;
    const DELIVERED = 4;
    const REJECTED = 5;
    const RETURNED_NO_FIT = 6;
    const RETURNED_IN_TRANSIT = 7;
    const RETURNED_IN_WAREHOUSE = 8;
}
