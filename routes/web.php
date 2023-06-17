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

Route::/* middleware(['admin'])-> */prefix('')->namespace('Site')->group(
    function () {

        Route::get('', ['as' => 'site.home.index', 'uses' => 'HomeController@index']);
        Route::/* middleware(['admin'])-> */prefix('provas')->group(
            function () {
                route::get('', ['as' => 'site.provas.index', 'uses' => 'ProvaController@index']);
            }
        );
        Route::/* middleware(['admin'])-> */prefix('pautas')->group(
            function () {
                route::get('', ['as' => 'site.pautas.index', 'uses' => 'PautaController@index']);
            }
        );
        Route::/* middleware(['admin'])-> */prefix('agendas')->group(
            function () {
                route::get('', ['as' => 'site.agendas.index', 'uses' => 'AgendaController@index']);
            }
        );
    }
);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/folha_prova', function () {
    return view('folha_prova.index');
});
Route::get('/enunciado', function () {
    return view('enunciado.index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('ajax/cursos/disciplinas_por_curso/{it_id_curso}', ['as' => 'ajax.cursos.disciplinas_por_curso', 'uses' => 'Ajax\CursoController@index']);

Route::get('/ajax/provas/sala_por_prova/{it_id_prova}', ['as' => 'ajax.provas.sala_por_prova', 'uses' => 'Ajax\ProvaController@sala_por_prova']);

Route::get('/ajax/anos_lectivo/prova_por_ano/{it_id_ano_lectivo}', ['as' => 'ajax.anos_lectivo.prova_por_ano', 'uses' => 'Ajax\ProvaController@prova_por_ano']);
