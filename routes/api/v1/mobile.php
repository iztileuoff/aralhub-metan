<?php

use App\Http\Controllers\Api\V1\Mobile\GasStationController;

Route::group([
    'prefix'     => 'telegram',
    'as'         => 'telegram.',
], function () {
    Route::apiResource('gas-stations', GasStationController::class);
});
