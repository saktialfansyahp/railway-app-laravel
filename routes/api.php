<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get(uri: '/tes', action: function () {
    $result = Artisan::call('migrate');
    return response($result);
});
Route::post(uri: '/form', action: function (Request $request) {
    $data = $request->all();
    return response()->json([$data], 200);
});
Route::post('register', [AuthController::class, 'register']);
