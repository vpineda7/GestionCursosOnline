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

//Route::resource('listas', 'ListasController');
Auth::routes();
//Route::get('/register/{|}', 'Auth\RegisterController@showRegistrationForm');
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
Route::get('/register/profesor', 'Auth\ProfesorRegisterController@showRegistrationForm');
Route::post('/register/profesor', 'Auth\ProfesorRegisterController@register')->name('register.profesor');
Route::post('/curso', 'CursosController@create'); //Add Curso
Route::get('/crear_curso', 'CursosController@index');//show Cursos
Route::delete('/curso/{curso}', 'CursosController@destroy');//Delete Curso

Route::post('/curso/{curso_id}', 'ListasController@create'); //Add Listas
Route::get('/curso/{curso_id}', 'ListasController@index');//show Listas
Route::delete('/curso/{curso_id}/{lista_id}', 'ListasController@destroy');//Delete Lista
Route::get('/curso/main_search/{curso_id}', 'ListasController@main_search');//Main Search Listas
Route::get('/curso/search/{curso_id}', 'ListasController@search');//Search Listas
// Route::post('/curso/search/{curso_id}', 'ListasController@mostrar_resultado');//Mostrar resultado