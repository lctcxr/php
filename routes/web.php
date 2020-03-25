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
Route::group(['prefix'=>'admin','namespace'=>'admin'],function (){
//    ->middleware('json')
    Route::get('/index','HomeController@index');
    Route::post('/index','HomeController@login');
    Route::get('/admin','HomeController@store')->middleware('admin.auth');
    Route::get('/logout','HomeController@logout');
    Route::get('/table','AdminController@index');

});
