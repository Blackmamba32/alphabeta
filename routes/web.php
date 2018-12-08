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

/*Route::get('/', function () {
    return view('welcome');*/
    Route::get('/','PageController@index');
    Route::get('/about','PageController@about');
    Route::get('/contact','PageController@contact');
Route::get('/{n2}/{n1}', function ($n2,$n1) {
    return $n2.' is '.$n1.' years old';
});

