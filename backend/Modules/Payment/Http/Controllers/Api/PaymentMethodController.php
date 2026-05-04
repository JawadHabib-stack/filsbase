<?php

namespace Modules\Payment\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Payment\Models\PaymentMethod;

class PaymentMethodController extends Controller
{
    public function index()
    {
        $methods = PaymentMethod::where('status', true)->get();
        return response()->json($methods);
    }
}
