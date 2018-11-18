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
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::group(['namespace' => 'Front'], function(){
   Route::post('link', 'LinkController@link'); 
   Route::get('link2/{id}', 'LinkController@link2');
});
Route::get('mail/send', 'MailController@send');

