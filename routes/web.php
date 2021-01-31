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
//pembahasan intro laravel
Route::get('/', 'HomeController@index');
Route::get('/register', 'AuthController@register');
Route::post('/selamat', 'AuthController@form');
//
Route::get('/master', function(){
    return view('adminlte.master');
});

Route::get('/items',function(){
    return view('items.index');
});

Route::get('/items/table',function(){
    return view('items.table');
});

Route::get('/items/task',function(){
    return view('items.task');
});

//Tugas Laravel CRUD
Route::get('/pertanyaan','PertanyaanController@index');
Route::get('/pertanyaan/create','PertanyaanController@create');
Route::post('/pertanyaan','PertanyaanController@store');
Route::get('/pertanyaan/{pertanyaan_id}','PertanyaanController@show');
Route::get('/pertanyaan/{pertanyaan_id}/edit','PertanyaanController@edit');
Route::put('/pertanyaan/{pertanyaan_id}','PertanyaanController@update');
Route::delete('/pertanyaan/{pertanyaan_id}','PertanyaanController@stroy');
