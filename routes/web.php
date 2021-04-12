<?php

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

Route::group(['middleware'=> 'web'], function () {
    Route::get('/', 'HomeController@index');
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home'); 
});


Route::get('/pecas', 'pecasController@index');
Route::get('/pecas/new', 'pecasController@new');
Route::post('pecas/add', 'pecasController@add');
Route::get('pecas/{id}/edit', 'pecasController@edit');
Route::post('/pecas/update/{id}', 'pecasController@update');
Route::delete('/pecas/delete/{id}', 'pecasController@delete');
