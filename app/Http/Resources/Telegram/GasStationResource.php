<?php

namespace App\Http\Resources\Telegram;

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
            'personal_number' => $this->personal_number,
            'open_time' => $this->open_time?->format('H:i'),
            'close_time' => $this->close_time?->format('H:i'),
            'lat' => $this->lat,
            'long' => $this->long,
            'is_active' => $this->is_active,
            'is_open' => $this->is_open,
            'image_url' => $this->getFirstMediaUrl('images'),
        ];
    }
}
