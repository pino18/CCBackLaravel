<?php

namespace App\Http\Controllers;

use App\DataTransferObjects\StorePostData;
use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(protected PostService $postService)
    {
    }
    /**
     * @return PostCollection
     */
    public function index()
    {
        return new PostCollection($this->postService->index());
    }

    public function store(Request $request):JsonResponse
    {
        return response()->json(
            new PostResource(
                $this->postService->store(StorePostData::from($request))),
           
        );

    }
    public function show(Int $id):JsonResponse
    {
        return response()->json($this->postService->show($id));
    }

    public function update(Request $request, int $id):JsonResponse
    {
        return response()->json($this->postService->update($request, $id));
    }

    public function destroy(int $id):JsonResponse
    {
        return response()->json($this->postService->destroy($id), 204);
    }
}
