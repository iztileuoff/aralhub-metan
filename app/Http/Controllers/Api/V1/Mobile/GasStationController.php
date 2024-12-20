<?php

namespace App\Http\Controllers\Api\V1\Mobile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateGasStationRequest;
use App\Http\Resources\GasStationResource;
use App\Models\GasStation;
use Illuminate\Http\Request;

class GasStationController extends Controller
{
    public function index(Request $request)
    {
        $gasStations = GasStation::orderBy('is_open', 'desc')->get();

        return GasStationResource::collection($gasStations);
    }
}
