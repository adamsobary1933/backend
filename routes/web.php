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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('layouts.backend');
});

// Route::get('dashboardfrontend', function () {
//     return view('dashboardfrontend');
// });

// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

Route::resource('karyawan', 'karyawanController');
Route::resource('formulir', 'formulirController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
