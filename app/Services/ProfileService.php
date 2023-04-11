<?php

namespace App\Services;

use App\Models\Profile;
use Illuminate\Http\Request;

interface ProfileService
{
    public function index();
    public function store(Request $request): Profile;
    public function show(int $id): Profile;
    public function update(Request $request, int $id): Profile;
    public function destroy(int $id);
}