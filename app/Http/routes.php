<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::put('monitor/{monitor_id}/client/{client_id}/', 'MonitorController@addMonitorClient');
Route::put('computer/{computer_id}/client/{client_id}/', 'ComputerController@addComputerClient');

Route::resource('client', 'ClientController');
Route::resource('computer', 'ComputerController');
Route::resource('monitor', 'MonitorController');
