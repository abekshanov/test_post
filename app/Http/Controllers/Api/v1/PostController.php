<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getList(): JsonResponse
    {
//        dd(User::all()->toArray(), Post::all()->toArray(), Comment::all()->toArray());
        return response()->json(
            Post::query()
            ->with(['comments', 'comments.user'])
            ->get()
        );
    }
}
