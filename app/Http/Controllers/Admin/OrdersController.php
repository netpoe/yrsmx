<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Model\{
    UserAdapter as User,
    OrdersAdapter as Orders
};

class OrdersController extends Controller
{
    public function index(Request $request)
    {
        $orders = Orders::all();

        if ($request->status) {
            $orders = $orders->where('status_id', $request->status);
        }

        $params = compact('orders');

        return view('admin.orders.index', $params);
    }

    public function show(Orders $order)
    {
        $params = compact('order');

        return view('admin.orders.show', $params);
    }
}
