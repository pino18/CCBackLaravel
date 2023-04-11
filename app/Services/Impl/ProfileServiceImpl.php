<?php

namespace App\Services\Impl;

use App\Models\Profile;
use App\Services\ProfileService;
use Illuminate\Http\Request;

class ProfileServiceImpl implements ProfileService
{
    public function index()
    {
        return Profile::all();
    }
    public function store(Request $request): Profile
    {
        $profile = new Profile();
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->password = $request->password;
        $profile->birthday = $request->birthday;
        $profile->save();
        return $profile;
    }
    public function show(int $id): Profile
    {
        $profile = Profile::findOrFail($id);
        return $profile;
    }
    public function update(Request $request, int $id): Profile
    {
        $profile = Profile::findOrFail($id);
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->password = $request->password;
        $profile->birthday = $request->birthday;
        $profile->save();
        return $profile;
    }
    public function destroy(int $id)
    {
        Profile::findOrFail($id)->delete();
    }
}