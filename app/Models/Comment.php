<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'text',
        'phone',
        'gas_station_id',
    ];

    protected $casts = [
        'text' => 'string',
        'phone' => 'string',
        'gas_station_id' => 'string',
        'created_at' => 'datetime',
    ];
}
