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
// })->middleware('auth.basic');

// Authentication routes
Auth::routes();

// If your application doesn’t need registration, you may disable 
// it by removing the newly created RegisterController and 
// modifying your route declaration: Auth::routes(['register' => false]);.
// Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/live', 'HomeController@live')->name('live');
