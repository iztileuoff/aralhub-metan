<?php

namespace App\Http\Resources;

use App\Models\GasStation;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin GasStation */
class GasStationResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'id' => $this->gas_station_id,
            'name' => $this->name,
            'lat' => $this->lat,
            'long' => $this->long,
            'is_open' => $this->is_open,
        ];
    }
}
