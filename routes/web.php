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

Route::get('/', function () {
    return redirect('login');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user-registration', 'HomeController@userRegistration')->name('user-registration');
Route::post('/create-user', 'HomeController@createUser')->name('create-user');

Route::get('/admin-registration', 'AdminController@adminRegistration')->name('admin-registration');
Route::post('/create-admin', 'AdminController@createAdmin')->name('create-admin');
Route::get('/user-listing', 'HomeController@userListing')->name('user-listing');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/', 'HomeController@userListing')->name('user-listing');
Route::get('/account','AccountController@index')->name('account');
Route::get('/create-account','AccountController@create')->name('create-account');
