<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Http\Request;
use App\DataTransferObjects\StorePostData;


interface PostService
{
    public function index();
    public function store(StorePostData $StorePostData): Post;
    public function show(int $id): Post;
    public function update(Request $request, int $id): Post;
    public function destroy(int $id);
}