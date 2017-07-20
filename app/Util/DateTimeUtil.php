<?php

namespace App\Util;

class DateTimeUtil
{
    const MEXICO_TZ_UTC_HOURS = 5;

    public static function DBNOW()
    {
        return (new \Moment\Moment())
                ->subtractHours(self::MEXICO_TZ_UTC_HOURS)
                ->format(\Moment\Moment::NO_TZ_MYSQL);
    }
}
