<?php

use App\Http\Controllers\WebhookController;
use Illuminate\Support\Facades\Route;

include_once __DIR__ . '/api/v1/mobile.php';
include_once __DIR__ . '/api/v1/telegram.php';

Route::post('/webhook', WebhookController::class);
