<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource("profiles", ProfileController::class);

Route::apiResource("posts", PostController::class)->only([
    "index",
    "store",
]);


Route::post("login", [AuthController::class, "login"]);

// Route::middleware("auth:sanctum")->group(function() {
// });

Route::apiResource("users", AuthController::class);

Route::group(["prefix" => "v1", "middleware" => ["auth:sanctum"]], function() {
  Route::post("logout", [AuthController::class, "logout"]);
  Route::apiResource("profiles", ProfileController::class)->only([
    "index",
    "store",
    "show",
    "update",
    "destroy",
  ]);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
