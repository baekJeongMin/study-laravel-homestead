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


Route::namespace('LaravelRequest')->group(function(){
    Route::get('request/test', 'RequestController@get');
    Route::get('request/psr-test', 'RequestController@psrTest');
    Route::get('request/session', 'RequestController@session');
    Route::get('request/cookie', 'RequestController@cookie');
});

use Psr\Http\Message\ServerRequestInterface;

Route::get('/', function (ServerRequestInterface $request) {
    //
});
