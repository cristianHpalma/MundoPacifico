<?php

use App\Http\Controllers\CalleController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\RegionesController;
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



Route::prefix("/region")->group(function () {
    Route::get('/', [RegionesController::class, 'listar']);
});
Route::prefix("/provincia")->group(function () {
    Route::post('/', [ProvinciaController::class, 'listar']);
});
Route::prefix("/ciudad")->group(function () {
    Route::post('/', [CiudadController::class, 'listar']);
});
Route::prefix("/calle")->group(function () {
    Route::post('/', [CalleController::class, 'listar']);
});
