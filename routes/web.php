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
    #$serv = new swoole_server('0.0.0.0',9510);
    #$serv->on('connect',function($serv,$fd) {
	#echo "client: connect.\n";
    #});
    return view('welcome');
});
