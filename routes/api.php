<?php

use App\Http\Controllers\Api\ServiceOrderController;
use Illuminate\Support\Facades\Route;

Route::apiResource('service_orders', ServiceOrderController::class)->only('index', 'store');
