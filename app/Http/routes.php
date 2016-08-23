<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


/*
 /
/carrinho
/produto
/meu-carrinho
/dashboard
*/


Route::resource('/', 'Externo\IndexController', ['only' => ['index', 'store']]);
Route::get('/categoria/{categoria}', ['as' => 'categoria.show', 'uses' => 'Externo\IndexController@show']);// alterar o controller
Route::get('/produto/{produto}', ['as' => 'produto.show', 'uses' => 'Externo\IndexController@show']);// alterar o controller

//alterar controller
Route::resource('carrinho', 'Externo\IndexController'); // alterar o controller
Route::resource('meu-carrinho', 'Externo\IndexController'); // alterar o controller

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', ['as' => 'dashboard', 'uses' => 'Sistema\DashboardController@index']);
    Route::resource('/categorias', 'Sistema\DashboardController', ['except' => ['show']]); // alterar o controller
    Route::resource('/produtos', 'Sistema\DashboardController', ['except' => 'show']); // alterar o controller
    Route::get('/logout', ['as' => 'dashboard.logout', 'uses' => 'Sistema\DashboardController@destroy']);
});
