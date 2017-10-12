<?php

namespace App\Service;

use App\Model\{
    UserAdapter as User,
    User\UserCartsAdapter as UserCarts,
    OrdersAdapter as Orders,
    OrderTypePayPalAdapter as OrderTypePayPal,
    Dictionary\LuOrderStatusAdapter as LuOrderStatus
};

class OrdersService
{
    protected $user;

    protected $cart;

    protected $order;

    protected $paymentType;

    protected $paymentInfo;

    public function setType(String $paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    public function setPaymentInfo(Array $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;

        return $this;
    }

    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    public function setCart(UserCarts $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    public function createOrder()
    {
        $this->order = Orders::create([
            'user_id' => $this->user->id,
            'cart_id' => $this->cart->id,
            'address_id' => $this->cart->user_address_id,
            'status_id' => LuOrderStatus::PAID,
            'payment_type' => $this->paymentType,
        ]);

        if ($this->paymentType == Orders::TYPE_PAYPAL
            && array_key_exists('id', $this->paymentInfo)) {
            $this->createPayPalOrder();
        }

        return $this;
    }

    public function createPayPalOrder()
    {
        $payer = $this->paymentInfo['payer'];

        $payerInfo = $payer['payer_info'];

        $payerAddress = $payerInfo['shipping_address'];

        $this->orderInfo = OrderTypePayPal::create([
            'order_id' => $this->order->id,
            'payment_id' => $this->paymentInfo['id'],
            'state' => $this->paymentInfo['state'],
            'cart' => $this->paymentInfo['cart'],
            'create_time' => $this->paymentInfo['create_time'],
            'payer_status' => $payer['status'],
            'payer_email' => $payerInfo['email'],
            'payer_first_name' => $payerInfo['first_name'],
            'payer_middle_name' => $payerInfo['middle_name'],
            'payer_last_name' => $payerInfo['last_name'],
            'payer_payer_id' => $payerInfo['payer_id'],
            'payer_country_code' => $payerInfo['country_code'],
            'payer_recipient_name' => $payerAddress['recipient_name'],
            'payer_street' => $payerAddress['line1'],
            'payer_city' => $payerAddress['city'],
            'payer_state' => $payerAddress['state'],
            'payer_postal_code' => $payerAddress['postal_code'],
            'payer_country_code' => $payerAddress['country_code'],
        ]);

        return $this;
    }

    public function getOrder()
    {
        return $this->order;
    }
}
