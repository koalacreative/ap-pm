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
    return view('admin_template');
});

Route::get('test', 'TestCon@index');

Route::get('detail', 'TestCon@index');

Route::auth();

Route::get('/home', 'HomeController@index');
#example
Route::get('/datatables/add', 'DatatablesController@getForm');
Route::post('/datatables/save', 'DatatablesController@store');
Route::get('/datatables/edit/{id}', 'DatatablesController@edit');
Route::post('/datatables/update/{id}', 'DatatablesController@update');
Route::get('/datatables/delete/{id}', 'DatatablesController@destroy');
Route::controller('datatables', 'DatatablesController', [
    'anyData'  => 'datatables.data',
    'getIndex' => 'datatables',
]);
#master data
Route::get('/master/wilayah/add', 'MasterController@getForm');
Route::post('/master/wilayah/save', 'MasterController@store');
Route::get('/master/wilayah/edit/{id}', 'MasterController@edit');
Route::post('/master/wilayah/update/{id}', 'MasterController@update');
Route::get('/master/wilayah/delete/{id}', 'MasterController@destroy');
Route::controller('master/wilayah', 'MasterController', [
    'anyData'  => 'wilayah.data',
    'getIndex' => 'wilayah',
]);
