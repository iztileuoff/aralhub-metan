<?php

namespace App\Http\Controllers\Api\V1\Telegram;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateGasStationRequest;
use App\Http\Resources\Telegram\GasStationResource;
use App\Models\Change;
use App\Models\GasStation;
use Illuminate\Http\Request;

class GasStationController extends Controller
{
    public function index(Request $request)
    {
        $gasStations = GasStation::get();

        return GasStationResource::collection($gasStations);
    }

    public function show(string $personal_number)
    {
        $gasStation = GasStation::where('personal_number', $personal_number)->firstOrFail();

        return new GasStationResource($gasStation);
    }

    public function update(UpdateGasStationRequest $request, string $personal_number)
    {
        $gasStation = GasStation::where('personal_number', $personal_number)->firstOrFail();

        $gasStation->update($request->validated());

        $change = Change::create([
            'gas_station_id' => $gasStation->gas_station_id,
            'gas_station_name' => $gasStation->name,
            'is_open' => $gasStation->is_open,
        ]);

        return new GasStationResource($gasStation);
    }
}
