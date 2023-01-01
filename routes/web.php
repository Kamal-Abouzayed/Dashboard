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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome')->name('home');

Route::prefix('dashboard')->namespace('Dashboard')->name('dashboard.')->group(function () {

    Route::get('login', 'AuthController@loginForm')->name('login_form');
    Route::post('login', 'AuthController@login')->name('login_submit');
    Route::get('logout', 'AuthController@logout')->name('logout');

    Route::middleware(['auth'])->group(function () {
        Route::view('/', 'dashboard.home')->name('home');
        Route::resource('users', 'UserController')->names('users');
    });
});
