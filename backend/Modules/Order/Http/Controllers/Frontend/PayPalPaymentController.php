<?php

namespace Modules\Order\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Payment\Models\PaymentMethod;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PayPalPaymentController extends Controller
{
    private $baseUrl = 'https://api-m.sandbox.paypal.com'; // Use api-m.paypal.com for production

    private function getCredentials()
    {
        $paypalMethod = PaymentMethod::where('slug', 'paypal')->first();
        $settings = $paypalMethod->settings ?? [];
        if (empty($settings) && $paypalMethod->config) {
            $settings = json_decode($paypalMethod->config, true);
        }

        if (empty($settings['client_id']) || empty($settings['client_secret'])) {
            return null;
        }

        return [
            'client_id' => $settings['client_id'],
            'client_secret' => $settings['client_secret']
        ];
    }

    private function getAccessToken($clientId, $clientSecret)
    {
        $response = Http::withBasicAuth($clientId, $clientSecret)
            ->asForm()
            ->post("{$this->baseUrl}/v1/oauth2/token", [
                'grant_type' => 'client_credentials'
            ]);

        if ($response->successful()) {
            return $response->json('access_token');
        }

        Log::error('PayPal Access Token Error: ' . $response->body());
        return null;
    }

    public function createOrder(Request $request)
    {
        $credentials = $this->getCredentials();
        if (!$credentials) {
            return response()->json(['error' => 'PayPal is not configured correctly.'], 500);
        }

        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return response()->json(['error' => 'Your cart is empty.'], 400);
        }

        $total = array_reduce($cart, function ($carry, $item) {
            $price = isset($item['price']) ? (float)$item['price'] : 0;
            $quantity = isset($item['quantity']) ? (int)$item['quantity'] : 1;
            return $carry + ($price * $quantity);
        }, 0);

        $amount = number_format($total, 2, '.', '');

        if ($amount <= 0) {
            return response()->json(['error' => 'Invalid order total.'], 400);
        }

        $accessToken = $this->getAccessToken($credentials['client_id'], $credentials['client_secret']);
        if (!$accessToken) {
            return response()->json(['error' => 'Failed to authenticate with PayPal.'], 500);
        }

        $response = Http::withToken($accessToken)
            ->post("{$this->baseUrl}/v2/checkout/orders", [
                'intent' => 'CAPTURE',
                'purchase_units' => [
                    [
                        'amount' => [
                            'currency_code' => 'USD',
                            'value' => $amount
                        ]
                    ]
                ]
            ]);

        if ($response->successful()) {
            return response()->json(['id' => $response->json('id')]);
        }

        Log::error('PayPal Create Order Error: ' . $response->body());
        return response()->json(['error' => 'Failed to create PayPal order.'], 500);
    }

    public function captureOrder(Request $request)
    {
        $orderId = $request->input('orderID');
        if (!$orderId) {
            return response()->json(['error' => 'Invalid PayPal Order ID.'], 400);
        }

        $credentials = $this->getCredentials();
        if (!$credentials) {
            return response()->json(['error' => 'PayPal is not configured correctly.'], 500);
        }

        $accessToken = $this->getAccessToken($credentials['client_id'], $credentials['client_secret']);
        if (!$accessToken) {
            return response()->json(['error' => 'Failed to authenticate with PayPal.'], 500);
        }

        $response = Http::withToken($accessToken)
            ->withHeaders([
                'Content-Type' => 'application/json',
            ])
            ->post("{$this->baseUrl}/v2/checkout/orders/{$orderId}/capture");

        if ($response->successful()) {
            return response()->json($response->json());
        }

        Log::error('PayPal Capture Order Error: ' . $response->body());
        return response()->json(['error' => 'Failed to capture PayPal order.'], 500);
    }
}
