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

Route::get('/blog/abc', function() {
    return 'ABC Route';
});

Route::get('/jeconkisu', function(){
    return view('test');
});

Route::get('/arekta', function(){
    return view('info.another');
});

Route::get('/abcd', 'TestController@abcd');
Route::get('/xyz', 'TestController@xyz');