<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GasStation extends Model
{
    protected $fillable = [
        'gas_station_id',
        'name',
        'lat',
        'long',
        'is_open',
        'personal_number',
        'close_time',
    ];

    protected $casts = [
        'lat' => 'double',
        'long' => 'double',
        'is_open' => 'boolean',
        'personal_number' => 'string',
        'close_time' => 'datetime',
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'gas_station_id', 'gas_station_id');
    }
}
