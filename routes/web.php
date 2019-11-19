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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('listas', 'ListasController');
Auth::routes();
//Route::get('/register/{userType}', 'Auth\RegisterController@showRegistrationForm');

Route::get('/home', 'HomeController@index')->name('home');

// Route::post('/login/custom', 
// [
//     'uses' => 'LoginController@login',
//     'as' => 'login.custom'
// ]);


Route::get('/login/profesor', 'Auth\LoginController@showProfesorLoginForm');
Route::get('/register/profesor', 'Auth\RegisterController@showProfesorRegisterForm');

Route::post('/login/profesor', 'Auth\LoginController@profesorLogin');
Route::post('/register/profesor', 'Auth\RegisterController@createProfesor');

Route::view('/home', 'home')->middleware('auth');
Route::view('/profesor', 'profesor');
