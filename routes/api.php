<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::namespace("Api")->group(function() {
    Route::get("me/{user_id}", [UserController::class, "me"]);

    Route::get("posts_resource_collection", [PostController::class, "postsResourceCollection"]);
    Route::get("posts/{post_id}", [PostController::class, "postResource"]);
});
