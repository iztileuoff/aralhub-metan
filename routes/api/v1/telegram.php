<?php

use App\Http\Controllers\Api\V1\Telegram\GasStationController;

Route::group([
    'prefix'     => 'telegram',
    'as'         => 'telegram.',
], function () {
    Route::get('gas-stations', [GasStationController::class, 'index']);
    Route::get('gas-stations/{personal_number}', [GasStationController::class, 'show']);
    Route::put('gas-stations/{personal_number}', [GasStationController::class, 'update']);
    Route::patch('gas-stations/{personal_number}', [GasStationController::class, 'update']);
});


