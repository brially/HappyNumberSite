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

Route::get('/', 'HappyNumberController@index');

Route::resource('happy-number', 'HappyNumberController')->only(['index', 'store']);

Route::post('api/happy-number', 'Api\HappyNumberController@store');

Route::resource('javascript-scratch-pad', 'JavaScriptPracticeController')->only(['index', 'store']);

Route::resource('influence-health-scratch-pad', 'InfluenceHealthController')->only(['index', 'store']);


