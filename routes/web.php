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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/list', 'TaskController@index')->name('list');

Route::get('/add', 'TaskController@add')->name('add');
Route::post('/add', 'TaskController@insert')->name('insert');
