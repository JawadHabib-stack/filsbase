<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use Modules\Payment\Http\Controllers\Api\PaymentMethodController;

Route::group(['prefix' => 'v1'], function () {
    Route::get('payment-methods', [PaymentMethodController::class, 'index']);
});

Route::middleware('auth:api')->get('/payments', function (Request $request) {
    return $request->user();
});
