<?php

namespace App\Http\Controllers\Api\V1\Mobile;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReplyRequest;
use App\Http\Resources\ReplyResource;
use App\Models\Reply;

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

        return new ReplyResource(Reply::create($validated));
    }
}
