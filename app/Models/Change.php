<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Change extends Model
{
    protected $fillable = [
        'gas_station_id',
        'gas_station_name',
        'is_open',
    ];

    protected $casts = [
        'gas_station_id' => 'string',
        'gas_station_name' => 'string',
        'is_open' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
