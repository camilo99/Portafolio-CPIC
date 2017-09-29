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

Auth::routes();


Route::resource('/imagenes','ImageController');


Route::get('/', 'WelcomeController@index');


Route::get('/admin', 'AdminController@index');

Route::get('/contact', 'ContactController@index');

Route::get('pros', 'WelcomeController@mostrarProgramas');


Route::resource('programas', 'ProgramController');

Route::resource('admin', 'AdminController');


Route::resource('bienestar', 'BienestarController');


Route::resource('users', 'UserController');




Route::resource('slider', 'SliderController');

Route::resource('bienestar', 'BienestarController');


Route::group(['prefix'=>'users','middleware'=>['auth','admin','sub','bienestar']],function(){
	Route::resource('users', 'UserController');
});


/*Route::group(['middleware' => 'admin','sub','bienestar'], function(){
	Route::resource('users', 'UserController');
});*/
/*Route::group(['middleware' => ['admin']], function () {
	
});
*/
