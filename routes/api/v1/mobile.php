<?php

use App\Http\Controllers\Api\V1\Mobile\CommentController;
use App\Http\Controllers\Api\V1\Mobile\GasStationController;
use App\Http\Controllers\Api\V1\Mobile\ReplyController;

Route::group([
    'prefix'     => 'mobile',
    'as'         => 'mobile.',
], function () {
    Route::get('gas-stations', [GasStationController::class, 'index']);
    Route::get('comments', [CommentController::class, 'index']);
    Route::post('comments', [CommentController::class, 'store']);
    Route::post('replies', [ReplyController::class, 'store']);
});
