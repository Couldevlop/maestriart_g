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
use App\chorales;

Route::name('root_path')->get('/', 'PagesController@home');

Route::name('resgister_path')->get('/register', 'ChoraleController@prerempli');

Route::name('register_path')->post('/register', 'RegisterController@store');

Route::name('chorale_path')->get('/chorale', 'ChoraleController@store');