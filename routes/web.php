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

Route::get('/', 'Main@index')->name('main');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')
    ->middleware('verified')
    ->name('home');

Route::get('/admin', 'Admin@index')
    ->middleware('auth', 'super-admin')
    ->name('admin');

Route::get('test', 'Untitled@test');