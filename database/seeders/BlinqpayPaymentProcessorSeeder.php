<?php

namespace Database\Seeders;

use Geoslim\Blinqpay\Models\BlinqpayPaymentProcessor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlinqpayPaymentProcessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlinqpayPaymentProcessor::updateOrCreate(
            ['name' => 'Fincra'],
            [
                'reliability' => 0.8,
                'transaction_fee' => 200,
                'supported_currencies' => [
                    'NGN', 'USD', 'EUR'
                ]
            ]
        );

        BlinqpayPaymentProcessor::updateOrCreate(
            ['name' => 'Payoneer'],
            [
                'reliability' => 0.6,
                'transaction_fee' => 100,
                'supported_currencies' => [
                    'NGN', 'USD', 'EUR'
                ]
            ]
        );

        BlinqpayPaymentProcessor::updateOrCreate(
            ['name' => 'Paystack'],
            [
                'reliability' => 0.5,
                'transaction_fee' => 150,
                'supported_currencies' => [
                    'NGN'
                ]
            ]
        );

        BlinqpayPaymentProcessor::updateOrCreate(
            ['name' => 'RoyalBank'],
            [
                'reliability' => 0.5,
                'transaction_fee' => 150,
                'supported_currencies' => [
                    'GBP'
                ]
            ]
        );
    }
}
