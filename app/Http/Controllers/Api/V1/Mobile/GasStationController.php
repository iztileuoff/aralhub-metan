<?php

namespace App\Http\Controllers\Api\V1\Mobile;

use App\Http\Controllers\Controller;
use App\Http\Resources\Mobile\GasStationResource;
use App\Models\GasStation;
use Illuminate\Http\Request;

class GasStationController extends Controller
{
    public function index(Request $request)
    {
        $gasStations = GasStation::orderBy('is_active', 'desc')
            ->orderBy('is_open', 'desc')
            ->get();

        return GasStationResource::collection($gasStations);
    }
}
