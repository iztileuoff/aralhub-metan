<?php

namespace App\Http\Controllers\Api\V1\Mobile;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReplyRequest;
use App\Http\Resources\ReplyResource;
use App\Models\GasStation;
use App\Models\Reply;
use Illuminate\Support\Facades\Log;
use SergiX44\Nutgram\Nutgram;

class ReplyController extends Controller
{
    public function store(StoreReplyRequest $request)
    {
        $validated = $request->validated();

        $lastReply = Reply::where('gas_station_id', $request->input('gas_station_id'))
            ->where('phone', $request->input('phone'))
            ->orderBy('id', 'desc')
            ->first();

        if ($lastReply) {
            $diff = now()->diffInMinutes($lastReply?->created_at);

            if ($diff <= 60) {
                return response()->json([
                    "message" => "Вы можете отправлять 1 ответ в час.",
                ], 422);
            }
        }

        $reply = Reply::create($validated);
        $gasStation = GasStation::where('gas_station_id', $reply->gas_station_id)->first();

        if ($reply->is_open != $gasStation->is_open) {
            $gasStationIsOpen = $gasStation->is_open ? "true" : "false";
            $replyIsOpen = $reply->is_open ? "true" : "false";

            $gasStation->is_open = $reply->is_open;
            $gasStation->save();

            Log::channel('telegram')->info("{$gasStation->name} {$gasStation->personal_number} is_open:{$gasStationIsOpen}.\n{$reply->name} {$reply->phone} is_open:{$replyIsOpen} {$reply->created_at?->format('Y-m-d H:i:s')}");
        }

        return new ReplyResource($reply);
    }
}
