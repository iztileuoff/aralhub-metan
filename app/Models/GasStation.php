<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GasStation extends Model
{
    protected $fillable = [
        'gas_station_id',
        'name',
        'title',
        'lat',
        'long',
        'is_open',
    ];

    protected $casts = [
        'lat' => 'double',
        'long' => 'double',
        'is_open' => 'boolean',
    ];
}
