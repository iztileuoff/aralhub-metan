<?php

namespace App\Http\Resources;

use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Reply */
class ReplyResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'is_open' => $this->is_open,
            'name' => $this->name,
            'phone' => $this->phone,
            'gas_station_id' => $this->gas_station_id,
            'created_at' => $this->created_at?->format('Y-m-d H:i:s'),
        ];
    }
}
