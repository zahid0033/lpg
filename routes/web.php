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
//Route::get('/about', 'pagesController@about')->name('pages.about');
Route::get('/about', 'pagesController@about');
Route::get('/lpg_station', 'pagesController@lpg_station')->name('pages.lpg_station');
Route::get('/conversion_stations', 'pagesController@conversion_stations')->name('pages.conversion_stations');
Route::get('/conversion_kits', 'pagesController@conversion_kits')->name('pages.conversion_kits');
Route::get('/products', 'pagesController@products')->name('pages.products');
Route::get('/contact', 'pagesController@contact')->name('pages.contact');


Route::get('/lpg', 'pagesController@lpg')->name('pages.lpg');
Route::get('/lpg_ragulated', 'pagesController@lpg_ragulated')->name('pages.lpg_ragulated');
//Route::get('/contact','pagesController@contact');
