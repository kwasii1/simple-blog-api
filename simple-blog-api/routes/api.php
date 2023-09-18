<?php

use App\Http\Controllers\PostController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('posts',[PostController::class,'index']);
Route::post('posts',[PostController::class,'store']);
Route::get('posts/{id}',[PostController::class,'show']);
Route::delete('posts/{id}',[PostController::class,'destroy']);
Route::put('posts/{id}',[PostController::class,'update']);