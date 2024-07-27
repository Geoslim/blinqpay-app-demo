<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\MakePaymentRequest;
use Geoslim\Blinqpay\Exceptions\BlinqpayException;
use Geoslim\Blinqpay\Facades\Blinqpay;
use Illuminate\Http\JsonResponse;

class PaymentController extends Controller
{
    public function __invoke(MakePaymentRequest $request): JsonResponse
    {
        try {
            $response = Blinqpay::performTransaction($request->validated());
            return response()->json(['message' => 'Payment processed successfully', 'result' => $response], 200);
        } catch (BlinqpayException $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        } catch (\Exception $e) {
            // Handle other exceptions
            return response()->json(['message' => 'An error occurred'], 500);

        }
    }
}
