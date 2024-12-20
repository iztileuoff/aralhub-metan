<?php

use App\Http\Controllers\Api\V1\Mobile\GasStationController;

Route::group([
    'prefix'     => 'mobile',
    'as'         => 'mobile.',
], function () {
    Route::apiResource('gas-stations', GasStationController::class);
});
