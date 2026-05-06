<?php

namespace Modules\Order\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Modules\Order\Models\Order;

class MyOrdersController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', auth()->id())
            ->latest()
            ->paginate(10);

        return view('order::frontend.my-orders', compact('orders'));
    }

    public function show($orderNumber)
    {
        $order = Order::where('user_id', auth()->id())
            ->where('order_number', $orderNumber)
            ->with('items')
            ->firstOrFail();

        return view('order::frontend.my-order-detail', compact('order'));
    }
}
