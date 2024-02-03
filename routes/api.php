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

Route::get('/obterDadosEmpresa/{ticker}', [ApiController::class, 'obterDadosEmpresa'])->name('api.obterDadosEmpresa');
Route::get('/obterDadosCripto/{ticker}', [ApiController::class, 'obterDadosCripto'])->name('api.obterDadosCripto');

