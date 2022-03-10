<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postResource(int $id)
    {
        $post = Post::findOrFail($id);
        return new PostResource($post);
    }

    public function postsResourceCollection()
    {
        return PostResource::collection(Post::all());
    }
}
