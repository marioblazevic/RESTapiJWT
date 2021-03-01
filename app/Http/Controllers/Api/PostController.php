<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function index()
    {
        $posts = auth()->user()->posts;
        return $posts;
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $post = Post::find($id);
        return $post;
    }

    public function create(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'user_id' => auth()->id()
        ]);
        
        return $post;
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $post = Post::find($id);
        $post->title = $request->title;
        $post->save();
        return $post;
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $post = Post::find($id);
        $post->delete();
    }

}
