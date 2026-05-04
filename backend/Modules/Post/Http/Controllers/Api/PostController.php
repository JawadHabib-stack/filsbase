<?php

namespace Modules\Post\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Post\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::published()->recentlyPublished()->paginate(10);
        return response()->json($posts);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::published()->where('id', $id)->orWhere('slug', $id)->firstOrFail();
        return response()->json($post);
    }
}
