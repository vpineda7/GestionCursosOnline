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
//Route::get('/register/', 'Auth\RegisterController@showRegistrationForm');

Route::get('/home', 'HomeController@index')->name('home');

    Route::prefix('profesor') -> group(function(){
        Route::get('/login','Auth\ProfesorLoginController@showLoginForm')->name('profesor.login');
        Route::post('/login','Auth\ProfesorLoginController@login')->name('profesor.login.submit');
        // Route::post('/logout','Auth\ProfesorLoginController@logout')->name('profesor.login.logout');
        Route::get('/', 'ProfesorController@index')->name('profesor_dashboard');
    });
// Route::post('/login/custom', 
// [
//     'uses' => 'LoginController@login',
//     'as' => 'login.custom'
// ]);
//Route::get('logout', 'Auth\LoginController@logout');
