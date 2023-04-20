<?php

use App\Http\Controllers\StatsController;
use App\Http\Controllers\UserController;
use App\Models\Stat;
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

Route::get('/kill/{user_id}',[StatsController::class,'kill']);
Route::get('/removekill/{user_id}/{number}', [StatsController::class, 'removekill']);

Route::get('/piece/{user_id}/{number}',[StatsController::class,'piece']);
Route::get('/removepiece/{user_id}/{number}', [StatsController::class, 'removepiece']);