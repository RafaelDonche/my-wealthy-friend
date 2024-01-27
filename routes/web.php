<?php

use App\Http\Controllers\Auth\ConfirmacaoEmailController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvestimentoAcaoController;
use App\Http\Controllers\InvestimentoCriptoController;
use App\Http\Controllers\InvestimentoFundoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Login
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'autenticacao'])->name('login.autenticacao');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//registrar usuário
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register/store', [RegisterController::class, 'register'])->name('register.store');

//Alteração de senha
Route::get('/passwordReset1', [PasswordResetController::class, 'passwordReset1'])->name('passwordReset1');
Route::post('/passwordReset2', [PasswordResetController::class, 'passwordReset2'])->name('passwordReset2');
Route::get('/passwordReset3/{id}', [PasswordResetController::class, 'passwordReset3'])->name('passwordReset3');
Route::post('/passwordReset4/{id}', [PasswordResetController::class, 'passwordReset4'])->name('passwordReset4'); //atualização de senha

//Confirmação de e-mail, após a realização do cadastro
Route::get('/reenviar-link', [ConfirmacaoEmailController::class, 'encaminharLink'])->name('reenviar_link');
Route::post('/link-encaminhado', [ConfirmacaoEmailController::class, 'linkEncaminhado'])->name('link_encaminhado');
Route::get('/confirmacao-email/{id}', [ConfirmacaoEmailController::class, 'confirmacaoEmail'])->name('confirmacao_email');

Route::group(['middleware' => 'auth'], function () {

    // Investimento
    Route::group(['prefix' => '/carteira', 'as' => 'carteira.'], function() {

        // Home
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/obterDados', [HomeController::class, 'obterDados'])->name('obterDados');

        // investimento de ação
        Route::group(['prefix' => '/acao', 'as' => 'acao.'], function() {
            Route::get('/obterDados', [InvestimentoAcaoController::class, 'obterDados'])->name('obterDados');
            Route::post('/store', [InvestimentoAcaoController::class, 'store'])->name('store');
            Route::get('/show/{id}', [InvestimentoAcaoController::class, 'show'])->name('show');
            Route::post('/update/{id}', [InvestimentoAcaoController::class, 'update'])->name('update');
            Route::post('/vender/{id}', [InvestimentoAcaoController::class, 'vender'])->name('vender');
            Route::post('/destroy/{id}', [InvestimentoAcaoController::class, 'destroy'])->name('destroy');
        });

        // investimento de fundo
        Route::group(['prefix' => '/fundo', 'as' => 'fundo.'], function() {
            Route::get('/obterDados', [InvestimentoFundoController::class, 'obterDados'])->name('obterDados');
            Route::post('/store', [InvestimentoFundoController::class, 'store'])->name('store');
            Route::get('/show/{id}', [InvestimentoFundoController::class, 'show'])->name('show');
            Route::post('/update/{id}', [InvestimentoFundoController::class, 'update'])->name('update');
            Route::post('/vender/{id}', [InvestimentoFundoController::class, 'vender'])->name('vender');
            Route::post('/destroy/{id}', [InvestimentoFundoController::class, 'destroy'])->name('destroy');
        });

        // investimento de cripto
        Route::group(['prefix' => '/cripto', 'as' => 'cripto.'], function() {
            Route::get('/obterDados', [InvestimentoCriptoController::class, 'obterDados'])->name('obterDados');
            Route::post('/store', [InvestimentoCriptoController::class, 'store'])->name('store');
            Route::get('/show/{id}', [InvestimentoCriptoController::class, 'show'])->name('show');
            Route::post('/update/{id}', [InvestimentoCriptoController::class, 'update'])->name('update');
            Route::post('/vender/{id}', [InvestimentoCriptoController::class, 'vender'])->name('vender');
            Route::post('/destroy/{id}', [InvestimentoCriptoController::class, 'destroy'])->name('destroy');
        });

    });
});
