<?php

namespace App\Services;

use Geoslim\Blinqpay\Contracts\BlinqpayPaymentProcessorInterface;

class PaystackAdapter implements BlinqpayPaymentProcessorInterface
{
    public function processPayment(array $transaction)
    {
        // TODO: Implement processPayment() method.
        return [
            'transaction' => $transaction,
            'adapter' => 'paystack'
        ];
    }
}
