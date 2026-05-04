<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => '\Modules\Order\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => 'web', 'prefix' => ''], function () {
    // Cart Routes
    Route::get('cart', ['as' => 'cart.index', 'uses' => 'CartController@index']);
    
    // Checkout Routes (Requires Auth)
    Route::group(['middleware' => 'auth'], function () {
        Route::get('checkout', ['as' => 'checkout.index', 'uses' => 'CheckoutController@index']);
        Route::post('checkout', ['as' => 'checkout.store', 'uses' => 'CheckoutController@store']);
        Route::get('checkout/success/{orderNumber}', ['as' => 'checkout.success', 'uses' => 'CheckoutController@success']);
        
        // Stripe Routes
        Route::post('payment/stripe/create-intent', ['as' => 'payment.stripe.create-intent', 'uses' => 'StripePaymentController@createPaymentIntent']);
        
        // PayPal Routes
        Route::post('payment/paypal/create-order', ['as' => 'payment.paypal.create-order', 'uses' => 'PayPalPaymentController@createOrder']);
        Route::post('payment/paypal/capture-order', ['as' => 'payment.paypal.capture-order', 'uses' => 'PayPalPaymentController@captureOrder']);
    });
});

/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => '\Modules\Order\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {
    /*
     *
     *  Backend Orders Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'orders';
    $controller_name = 'OrdersController';
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/trashed", ['as' => "$module_name.trashed", 'uses' => "$controller_name@trashed"]);
    Route::patch("$module_name/trashed/{id}", ['as' => "$module_name.restore", 'uses' => "$controller_name@restore"]);
    Route::resource("$module_name", "$controller_name");
});
