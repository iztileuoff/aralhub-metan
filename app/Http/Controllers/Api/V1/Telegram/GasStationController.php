<?php

namespace App\Http\Controllers\Api\V1\Telegram;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateGasStationRequest;
use App\Http\Resources\GasStationResource;
use App\Models\GasStation;
use Illuminate\Http\Request;

class GasStationController extends Controller
{
    public function index(Request $request)
    {
        $gasStations = GasStation::get();

        return GasStationResource::collection($gasStations);
    }

    public function show(string $name)
    {
        $gasStation = GasStation::where('name', $name)->firstOrFail();

        return new GasStationResource($gasStation);
    }

    public function update(UpdateGasStationRequest $request, string $name)
    {
        $gasStation = GasStation::where('name', $name)->firstOrFail();

        $gasStation->update($request->validated());

        return new GasStationResource($gasStation);
    }
}
