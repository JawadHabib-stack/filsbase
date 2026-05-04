<?php

namespace Modules\Order\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Order\Models\Order;
use Modules\Payment\Models\PaymentMethod;

use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Log;

class StripePaymentController extends Controller
{
    public function createPaymentIntent(Request $request)
    {
        Log::info('Stripe Create Intent Started. Session ID: ' . session()->getId());
        $cart = session()->get('cart', []);
        Log::info('Cart Content: ' . json_encode($cart));
        
        $stripeMethod = PaymentMethod::where('slug', 'stripe')->first();
        
        $settings = $stripeMethod->settings ?? [];
        if (empty($settings) && $stripeMethod->config) {
            $settings = json_decode($stripeMethod->config, true);
        }

        $secretKey = $settings['secret_key'] ?? null;
        
        if (!$stripeMethod || !$secretKey) {
            return response()->json(['error' => 'Stripe is not configured correctly. Please enter your Secret Key in Admin settings.'], 500);
        }

        if (empty($cart)) {
            return response()->json(['error' => 'Your cart is empty.'], 400);
        }

        $total = array_reduce($cart, function ($carry, $item) {
            $price = isset($item['price']) ? (float)$item['price'] : 0;
            $quantity = isset($item['quantity']) ? (int)$item['quantity'] : 1;
            return $carry + ($price * $quantity);
        }, 0);

        $amount = (int)round($total * 100);

        if ($amount <= 0) {
            return response()->json(['error' => 'Invalid order total.'], 400);
        }

        Log::info('Stripe Intent Amount: ' . $amount);
        if (!class_exists('Stripe\Stripe')) {
            $response = Http::withToken($secretKey)
                ->asForm()
                ->post('https://api.stripe.com/v1/payment_intents', [
                    'amount' => $amount,
                    'currency' => 'usd',
                    'automatic_payment_methods[enabled]' => 'true',
                ]);

            if ($response->failed()) {
                return response()->json(['error' => $response->json()['error']['message'] ?? 'Stripe API request failed.'], 500);
            }

            return response()->json([
                'clientSecret' => $response->json()['client_secret'],
            ]);
        }

        // Use SDK if available
        \Stripe\Stripe::setApiKey($secretKey);

        try {
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => $amount,
                'currency' => 'usd',
                'automatic_payment_methods' => [
                    'enabled' => true,
                ],
            ]);

            return response()->json([
                'clientSecret' => $paymentIntent->client_secret,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
