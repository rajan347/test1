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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sign-in', 'RegisterController@signin')->name('sign-in');
Route::post('/storeuser', 'RegisterController@storeuser')->name('storeuser');
Route::get('/dashboard', 'UserController@dashboard')->name('dashboard')->middleware('auth');
Route::get('/login_activity', 'UserController@loginactivity')->name('login_activity');
Route::get('/user_profile', 'UserController@userprofile')->name('user_profile');
Route::get('/delete_user/{id}', 'UserController@deleteuser')->name('delete_user');
Route::get('/edit_profile/{id}', 'UserController@editprofile')->name('edit_profile');
Route::post('/store_edit_profile', 'UserController@edituserinfo')->name('store_edit_profile');




