<?php

namespace App\Http\Controllers;

use App\DataTransferObjects\StoreProfileData;
use App\Http\Resources\ProfileCollection;
use App\Http\Resources\ProfileResource;
use App\Models\Profile;
use App\Services\ProfileService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct(protected ProfileService $profileService)
    {
    }
    /**
     * @return ProfileCollection
     */

    public function index()
    {
        return new ProfileCollection($this->profileService->index());
    }

    public function store(Request $request):JsonResponse
    {
        return response()->json(Profile::create(StoreProfileData::from($request)->toArray()));
    }

    public function show(Int $id):JsonResponse
    {
        return response()->json($this->profileService->show($id));
    }

    public function update(Request $request, int $id):JsonResponse
    {
        return response()->json($this->profileService->update($request, $id));
    }

    public function destroy(int $id):JsonResponse
    {
        return response()->json($this->profileService->destroy($id), 204);
    }


}
