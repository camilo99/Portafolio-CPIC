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
Route::resource('news','NewsController');


Route::get('/', 'WelcomeController@index');


Route::get('/admin', 'AdminController@index');

Route::get('/contact', 'ContactController@index');

Route::resource('programas_formacion', 'ProsComController');
Route::resource('programas_form', 'For_VirController');


Route::resource('programas', 'ProgramController');

Route::resource('admin', 'AdminController');


Route::resource('bienestar', 'BienestarController');


Route::resource('users', 'UserController');

Route::resource('aliados', 'AliadoController');




Route::resource('slider', 'SliderController');

Route::resource('bienestar', 'BienestarController');

Route::resource('users', 'UserController');




/*Route::group(['middleware' => 'admin','sub','bienestar'], function(){
	Route::resource('users', 'UserController');
});*/
/*Route::group(['middleware' => ['admin']], function () {
	
});
*/
