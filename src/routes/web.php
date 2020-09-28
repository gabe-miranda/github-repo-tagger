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
    return view('welcome');
});

Route::get('/tags', function () {
    return 'User tags here!';
});

Route::get('/userRepos', function () {
    return 'User tagged repositories here!';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
