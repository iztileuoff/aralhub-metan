<?php

namespace App\Console\Commands;

use App\Models\Comment;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class RefreshCommentsCommand extends Command
{
    protected $signature = 'refresh:comments';

    protected $description = 'Command description';

    public function handle(): void
    {
        Comment::query()->delete();

        $this->info("Barlıq kommentariylar óshirildi.");
        Log::channel('telegram')->info("Barlıq kommentariylar óshirildi.");
    }
}
