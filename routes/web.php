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
Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');


Route::get('/', 'Main@index')->name('main');
Route::get('/home', 'HomeController@index')
//    ->middleware('verified')
    ->name('home');

Route::get('/admin', 'Admin@index')
    ->middleware('auth', 'super-admin')
    ->name('admin');

Route::get('/post/{post_id}', 'Forum@post')->name('post');

Route::get('test', 'Untitled@test');
