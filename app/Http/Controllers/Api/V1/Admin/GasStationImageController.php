<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGasStationImageRequest;
use App\Http\Requests\UpdateGasStationRequest;
use App\Http\Resources\Telegram\GasStationResource;
use App\Models\GasStation;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class GasStationImageController extends Controller
{
    /**
     * @throws FileIsTooBig
     * @throws FileDoesNotExist
     */
    public function store(StoreGasStationImageRequest $request, string $id)
    {
        $gasStation = GasStation::where('gas_station_id', $id)->firstOrFail();

        $gasStation->clearMediaCollection('images');

        $gasStation->addMediaFromRequest('image_file')->toMediaCollection('images');

        return new GasStationResource($gasStation);
    }
}
