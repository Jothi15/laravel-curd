<?php

use App\Http\Controllers\Api\sampleController;
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
  Route::get("sample",[sampleController::class,'index']);
  Route::post("sampleStore",[sampleController::class,'store']);
  Route::delete("delete/{id}",[sampleController::class,'destroy']);