<?php

namespace Database\Seeders;

use App\Models\GasStation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class GasStationSeeder extends Seeder
{
    public function run()
    {
        $contents = File::get(storage_path('app/gasStations.json'));
        $data = json_decode(json: $contents, associative: true);

        $gasStations =  $data['gas_stations'];

        foreach ($gasStations as $gasStation) {
            GasStation::create([
                'gas_station_id' => $gasStation['id'],
                'name' => $gasStation['name'],
                'lat' => $gasStation['point']['coordinates'][0],
                'long' => $gasStation['point']['coordinates'][1],
            ]);
        }
    }
}
