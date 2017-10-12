<?php

namespace App\Model\Order\Type;

use Illuminate\Database\Eloquent\Model;

class OrderTypePayPal extends Model
{
    protected $table = 'order_type_paypal';

    public $timestamps = false;

    protected $fillable = [
        'order_id',
        'payment_id',
        'state',
        'cart',
        'create_time',
        'payer_status',
        'payer_email',
        'payer_first_name',
        'payer_middle_name',
        'payer_last_name',
        'payer_payer_id',
        'payer_country_code',
        'payer_recipient_name',
        'payer_street',
        'payer_city',
        'payer_state',
        'payer_postal_code',
        'payer_country_code',
    ];
}
