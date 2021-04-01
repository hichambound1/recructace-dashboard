<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'UserController@home');

Route::resource('/ville','VilleController');
Route::resource('/user','UserController');
Route::resource('/domain','DomainController');
Route::resource('/entreprise','EntrepriseController');
Route::resource('/condidat','CondidatController');
Route::resource('/annonce','AnnonceController');
Route::resource('/postule','postuleController');
Auth::routes();



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
