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

Route::get('/create', function () {
    return view('create');
});
Route::get('/delete/{id}', 'CreateController@Delete_Data');
Route::get('/', 'CreateController@home');
Route::get('/read/{id}', 'CreateController@read_Data');
Route::post('/insert', 'CreateController@add');
Route::get('/update/{id}', 'CreateController@update');
Route::post('/edit/{id}', 'CreateController@edit');

