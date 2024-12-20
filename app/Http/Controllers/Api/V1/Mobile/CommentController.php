<?php

namespace App\Http\Controllers\Api\V1\Mobile;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\Models\GasStation;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(CommentRequest $request)
    {
        $comments = Comment::where('gas_station_id', $request->input('gas_station_id'))
            ->orderBy('id', 'desc')
            ->take(10)
            ->get();

        return CommentResource::collection($comments);
    }

    public function store(StoreCommentRequest $request)
    {
        return new CommentResource(Comment::create($request->validated()));
    }
}
