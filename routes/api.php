<?php

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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [App\Http\Controllers\Api\AuthController::class, 'login']);
    Route::post('logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);
    Route::post('refresh', [App\Http\Controllers\Api\AuthController::class, 'refresh']);
    Route::post('me', [App\Http\Controllers\Api\AuthController::class, 'me']);

});

Route::get('posts', [App\Http\Controllers\Api\PostController::class, 'index']);
Route::post('posts', [App\Http\Controllers\Api\PostController::class, 'create']);
Route::get('posts/{id}', [App\Http\Controllers\Api\PostController::class, 'show']);
Route::put('posts/{id}', [App\Http\Controllers\Api\PostController::class, 'update']);
Route::delete('posts/{id}', [App\Http\Controllers\Api\PostController::class, 'destroy']);

