<?php

namespace App\Services\Impl;

use App\Models\Post;
use App\Services\PostService;
use App\DataTransferObjects\StorePostData;
use Illuminate\Http\Request;

class PostServiceImpl implements PostService
{
    public function index()
    {
        return Post::all();
    }

    public function store(StorePostData $request): Post
    {
        $post = new Post();
        $post->name = $request->name;
        $post->description = $request->description;
        $post->address = $request->address; 
        $post->benefit = $request->benefit;
        $post->created_by = $request->created_by; 
        $post->save();
        return $post;
    }

    public function show(int $id): Post
    {
        $post=Post::findOrFail($id);
        return $post;
    }

    public function update(Request $request, int $id): Post
    {
        $post = Post::findOrFail($id);
        $post->name = $request->name;
        $post->description = $request->description;
        $post->address = $request->address; 
        $post->benefit = $request->benefit;
        $post->created_by = $request->created_by;  
        $post->save();
        return $post;
    }

    public function destroy(int $id)
    {
        Post::findOrFail($id)->delete();
    }


}