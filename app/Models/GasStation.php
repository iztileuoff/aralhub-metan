<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class GasStation extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'gas_station_id',
        'name',
        'lat',
        'long',
        'is_active',
        'is_open',
        'personal_number',
        'open_time',
        'close_time',
    ];

    protected $casts = [
        'lat' => 'double',
        'long' => 'double',
        'is_active' => 'boolean',
        'is_open' => 'boolean',
        'personal_number' => 'string',
        'open_time' => 'datetime',
        'close_time' => 'datetime',
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'gas_station_id', 'gas_station_id');
    }
}
