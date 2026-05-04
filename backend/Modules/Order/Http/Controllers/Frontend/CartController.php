<?php

namespace Modules\Order\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {
        return view('order::frontend.cart');
    }
}
