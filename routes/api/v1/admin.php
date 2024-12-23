<?php

use App\Http\Controllers\Api\V1\Admin\GasStationImageController;

Route::group([
    'prefix'     => 'admin',
    'as'         => 'admin.',
], function () {
    Route::post('gas-stations/{id}/images', [GasStationImageController::class, 'store']);
});
