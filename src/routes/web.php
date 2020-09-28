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

Route::post('/tags', 'Services\TagController@createTag')->name('tags.createTag');
Route::get('/tags', 'Services\TagController@index');

Route::get('/userRepos', function () {
    return 'User tagged repositories here!';
});

Route::post('/home', 'HomeController@getData')->name('home.sendData');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
