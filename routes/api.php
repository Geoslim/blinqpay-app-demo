<?php

use App\Http\Controllers\API\v1\PaymentController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('pay', PaymentController::class);
});
