<?php

namespace App\Console\Commands;

use App\Models\GasStation;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class RefreshGasStationsCommand extends Command
{
    protected $signature = 'refresh:gas-stations';

    protected $description = 'Barlıq metan stanciyalar default jaǵdayǵa keltiriledi.';

    public function handle(): void
    {
        GasStation::query()->update([
            'is_active' => false,
            'is_open' => false,
        ]);

        $this->info("Barlıq metan stanciyalar default jaǵdayǵa keltiriledi.");
        Log::channel('telegram')->info("Barlıq metan stanciyalar default jaǵdayǵa keltiriledi.");
    }
}
