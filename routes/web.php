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
    // });
    
    
//Route Buat halaman Depan User
Route::get('/home', 'UserController@home')->name('home');
Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/competition', 'UserController@competition')->name('competition');
Route::get('/throwback', 'UserController@throwback')->name('throwback');
Route::get('/newsupdate', 'UserController@newsUpdate')->name('newsupdate');
Route::get('/login', 'UserController@login')->name('login');

//Route buat registrasi tim
Route::get('/register', 'pendaftaranController@register')->name('register');
Route::post('/register/success', 'pendaftaranController@StoreRegister')->name('storeRegister');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
