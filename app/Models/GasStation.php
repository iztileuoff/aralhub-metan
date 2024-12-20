<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'gas_station_id', 'gas_station_id');
    }
}
