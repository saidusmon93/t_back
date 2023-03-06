<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Table\Http\Controllers\RoomController;
use Modules\Table\Http\Controllers\ScheduleController;

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

Route::middleware('auth:api')->get('/table', function (Request $request) {
    return $request->user();
});

Route::get('/less', [ScheduleController::class, 'index']);
Route::get('/search/{value}', [RoomController::class, 'search']);
