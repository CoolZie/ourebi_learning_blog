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
Route::get('/','PageController@index');
Route::get('/add-article','PageController@addArticle');
Route::post('/add-article','ArticleController@store');
