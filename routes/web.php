<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route:: /* middleware(['admin'])-> */prefix('')->namespace('Site')->group(
    function () {

        Route::get('', ['as' => 'site.home.index', 'uses' => 'HomeController@index']);
        Route::get('ocorrencias', ['as' => 'site.ocorrencias.index', 'uses' => 'OcorrenciaController@index']);
        Route::get('desaparecidas', ['as' => 'site.desaparecidas.index', 'uses' => 'DesaparecidaController@index']);
        Route::get('econtradas', ['as' => 'site.econtradas.index', 'uses' => 'EncontradaController@index']);

    }
);

Auth::routes();

Route::post('users/registar', ['as' => 'site.users.register', 'uses' => 'Site\UserController@register']);

Auth::routes();