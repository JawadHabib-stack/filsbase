<?php

namespace Modules\Order\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Order\Models\Order;
use Modules\Order\Models\OrderItem;
use Modules\Product\Models\Product;
use App\Models\User;

use Illuminate\Support\Str;

class OrderDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();
        $products = Product::limit(5)->get();

        if ($products->isEmpty()) {
            return;
        }

        for ($i = 1; $i <= 10; $i++) {
            $order = Order::create([
                'user_id' => $user->id,
                'order_number' => 'ORD-' . strtoupper(Str::random(8)),
                'total_amount' => 0,
                'status' => ['Pending', 'Processing', 'Completed'][rand(0, 2)],
                'payment_status' => ['Pending', 'Paid'][rand(0, 1)],
                'payment_method' => 'Credit Card',
                'billing_details' => [
                    'address' => '123 Test St',
                    'city' => 'Test City',
                    'state' => 'TS',
                    'zip' => '12345',
                    'country' => 'USA'
                ],
                'shipping_details' => [
                    'address' => '123 Test St',
                    'city' => 'Test City',
                    'state' => 'TS',
                    'zip' => '12345',
                    'country' => 'USA'
                ],
                'notes' => 'Test order ' . $i
            ]);

            $total = 0;
            $randomProducts = $products->random(min(rand(1, 3), $products->count()));
            foreach ($randomProducts as $product) {
                $qty = rand(1, 5);
                $price = $product->price ?: 10.00;
                $itemTotal = $price * $qty;
                
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'product_name' => $product->name,
                    'price' => $price,
                    'quantity' => $qty,
                    'total' => $itemTotal
                ]);
                $total += $itemTotal;
            }

            $order->update(['total_amount' => $total]);
        }
    }
}
