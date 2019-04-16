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


Route::get('/', 'IndexController@getIndex');
Route::get('/getsampledata', 'Showdatacontroller@getData');
Route::get('/about','Showdatacontroller@getData');

Route::group(['prefix' => 'api'], function(){
    Route::get('get/submitted/years','Date\DatesController@getSubmittedYears');
});
