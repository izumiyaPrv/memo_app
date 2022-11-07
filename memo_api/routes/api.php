<?php

use App\Http\Controllers\MemoController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/v1/add',[MemoController::class, 'upsert']);
Route::delete('/v1/delete',[MemoController::class, 'delete']);
Route::get('/v1/get',[MemoController::class, 'get']);