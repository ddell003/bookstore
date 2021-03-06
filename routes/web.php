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


Route::get('/', 'HomeController@welcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/rsvp', 'RsvpController@index')->name('rsvp');
Route::get('/registry', 'RegistryController@index')->name('registry');
Route::get('/admin/parties', 'Admin\PartyController@index')->name('admin.parties');
Route::get('/admin/meals', 'Admin\MealController@index')->name('admin.meals');
//Route::resource('users', '\\' . UserController::class);
