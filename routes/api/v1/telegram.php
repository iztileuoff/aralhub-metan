<?php

use App\Http\Controllers\Api\V1\Telegram\GasStationController;

Route::get('gas-stations', [GasStationController::class, 'index']);
Route::get('gas-stations/{name}', [GasStationController::class, 'show']);
Route::patch('gas-stations/{name}', [GasStationController::class, 'update']);
