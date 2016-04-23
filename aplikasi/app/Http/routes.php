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
    return view('app_template');
});

Route::get('booking/schedule', 'BookingController@getSchedule');

Route::post('booking/add', 'BookingController@store');

Route::get('booking/create', 'BookingController@edit');


Route::get('booking/delete/{id}', 'BookingController@delete');

Route::post('booking/{id}/update', 'BookingController@update');

Route::get('booking/get/{id}','BookingController@get');

Route::get('pesan/', 'PesanController@getAll');
Route::get('pesan/kirim', 'PesanController@kirimPesan');
Route::post('pesan/add', 'PesanController@store');
Route::get('pesan/tanggapi/{id}', 'PesanController@tanggapi');
Route::post('pesan/tanggap/{id}', 'PesanController@updateTanggapan');

Route::get('konten/', 'KontenController@getAll');
Route::get('konten/create', 'KontenController@create');
Route::post('konten/add', 'KontenController@store');


// route to show the login form
Route::get('login', array('uses' => 'AutentifikasiController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'AutentifikasiController@doLogin'));