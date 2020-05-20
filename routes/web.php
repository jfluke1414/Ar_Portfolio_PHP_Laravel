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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MainController@index');

//Route::view('test', 'test');
Route::get('/test', 'TestController@index');

Route::post('contact', 'ContactController@send');

//Route::post('contactscontroller', function (){
//     var_dump();
//     return "aa";
// });