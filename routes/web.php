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

// GET afficher les pages , obtenir une ressource 
Route::get('/','PageController@index')->name('home');
Route::get('/add-article','PageController@addArticle')->middleware('auth');
Route::post('/add-article','ArticleController@store')->middleware('auth');
Route::get('/login','UserController@login')->name('login');
Route::get('/register','UserController@register');
Route::post('/register','UserController@createUser');
Route::post('/login','UserController@loginUser');
Route::get('/logout','UserController@logout');
Route::get('/administrateur','UserController@admin');




