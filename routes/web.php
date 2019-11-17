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

Route::get('/', 'pagesController@index')->name('pages.index');
Route::get('/about', 'pagesController@about')->name('pages.about');
Route::get('/lpg_station', 'pagesController@lpg_station')->name('pages.lpg_station');
Route::get('/conversion_kits', 'pagesController@conversion_kits')->name('pages.conversion_kits');
Route::get('/contact', 'pagesController@contact')->name('pages.contact');
