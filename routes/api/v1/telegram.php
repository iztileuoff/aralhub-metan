<?php

use App\Http\Controllers\Api\V1\Telegram\GasStationController;

Route::group([
    'prefix'     => 'telegram',
    'as'         => 'telegram.',
], function () {
    Route::get('gas-stations', [GasStationController::class, 'index']);
    Route::get('gas-stations/{name}', [GasStationController::class, 'show']);
    Route::put('gas-stations/{name}', [GasStationController::class, 'update']);
    Route::patch('gas-stations/{name}', [GasStationController::class, 'update']);
});


