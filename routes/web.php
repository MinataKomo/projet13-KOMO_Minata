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
// })->name('welcome');



Route::get('/', 'AdController@liste')->name('welcome');
Route::get('/liste', 'AdController@liste')->name('ad.liste');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/annonce', 'AdController@create')->name('ad.create');
Route::post('/annonce/create', 'AdController@store')->name('ad.store');


/*Admin Auth Routes */


Route::namespace('Admin')->group(function () {
    Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/admin/login', 'Auth\LoginController@login');
    Route::get('/admin/home', 'AdminController@index')->name('admin.home');
});