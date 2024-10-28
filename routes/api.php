<?php

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

Route::get(uri: '/tes', action: function () {
    return response()->json(data: ["OKE"], status: 200);
});
Route::post(uri: '/form', action: function (Request $request) {
    $data = $request->all();
    return response()->json([$data], 200);
});
