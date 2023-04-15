<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', 'App\Http\Controllers\MainController@login');

Route::post('/login', 'App\Http\Controllers\LoginController@login')->name('login');
Route::post('logout', '\App\Http\Controllers\LoginController@logout')->name('logout');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/welcome', 'App\Http\Controllers\MainController@welcome');

