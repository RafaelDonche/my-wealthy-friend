<?php

use App\Http\Controllers\ApiController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/list', [ApiController::class, 'list'])->name('api.list');
Route::get('/listCripto', [ApiController::class, 'listCripto'])->name('api.listCripto');
Route::get('/obterAcoes/{id_user}', [ApiController::class, 'obterAcoes'])->name('api.obterAcoes');

