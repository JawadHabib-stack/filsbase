<?php

namespace Modules\Payment\database\seeders;

use Illuminate\Database\Seeder;
use Modules\Payment\Models\PaymentMethod;

class PaymentDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::create([
            'name' => 'Stripe',
            'provider' => 'stripe',
            'config' => ['public_key' => 'pk_test_...', 'secret_key' => 'sk_test_...'],
            'status' => true,
        ]);

        PaymentMethod::create([
            'name' => 'PayPal',
            'provider' => 'paypal',
            'config' => ['client_id' => '...', 'client_secret' => '...'],
            'status' => true,
        ]);
    }
}
