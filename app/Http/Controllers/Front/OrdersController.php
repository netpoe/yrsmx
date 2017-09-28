<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\OrdersService;
use Auth;

class OrdersController extends Controller
{
    public function store(Request $request, OrdersService $ordersService)
    {
        $user = Auth::user();

        $ordersService
            ->setPaymentInfo($request->all())
            ->setType($request->paymentType)
            ->setUser($user)
            ->setCart($user->latestCart())
            ->createOrder();
    }
}
