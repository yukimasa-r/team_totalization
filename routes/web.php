<?php

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

Route::get('/', 'TopController@index')->name('index');

Route::get('{teamName}/more', 'TopController@more')->name('more');

Route::get('{teamName}/new', 'TopController@new')->name('new');

Route::post('store', 'TopController@store')->name('store');

Route::get('{id}/edit', 'TopController@edit')->name('edit');

Route::patch('{id}/update', 'TopController@update')->name('update');

Route::get('{id}/delete', 'TopController@delete')->name('delete');

Route::post('{id}/destroy', 'TopController@destroy')->name('destroy');