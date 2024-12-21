<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = [
        'is_open',
        'name',
        'phone',
        'gas_station_id',
    ];

    protected $casts = [
        'is_open' => 'boolean',
        'created_at' => 'datetime',
    ];
}
