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
Route::get('/verification', function () {
    return view('email.verification');
})->name('verification');


Route::get('/', 'Main@index')->name('main');

Route::get('/home', 'HomeController@index')
    ->middleware('auth', 'email-verified')
    ->name('home');

Route::get('/admin', 'Admin@index')
    ->middleware('auth', 'super-admin')
    ->name('admin');

Route::get('/post/{post_id}', 'Forum@post')->name('post');



Route::group(['middleware' => 'auth'], function () {
    Route::get('/filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show')->name('lfm');
    Route::post('/filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
});

Route::get('test', 'Untitled@test');
Route::get('all-files', 'Untitled@allFiles')->name('all-files');
