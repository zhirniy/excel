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

Auth::routes();
//Home page is page registration
Route::view('/', 'auth/register');
Route::get('/home', 'HomeController@index')->name('home');
//Front controller
Route::group(['namespace' => 'Front'], function(){
  //Create MSQL record and send enail
   Route::post('link', 'LinkController@link'); 
  //Create xls file
   Route::get('link2/{id}', 'LinkController@link2');
});
