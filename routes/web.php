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

Route::get('/sanberbook', function () {
    return view("SanberBook");
});

Route::get('/form', function () {
    return view("form");
});

Route::get('/home', 'RegisterController@home');
Route::get('/sapa_post', 'RegisterController@sapa_post');

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