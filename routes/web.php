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
});

Route::get('/index','TestController@index')->middleware('RoleMiddleware');
Route::get('/home','TestController@home');
Route::get('/result','CreateResult@Result');
Route::post('/savedata','CreateResult@StoreResult')->name('postdata');
Route::get('/viewresult','CreateResult@GetData');
