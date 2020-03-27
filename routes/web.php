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

Route::get('/', 'FrontController@index')->name('home');
Route::post('getdata', 'ApiController@getData');

Route::post('store-car', 'CatalogController@storeSelectedCar');
//Route::get('c/{carslug}/{engine_id}', 'CatalogController@index');
Route::get('c/{engine_id}', 'CatalogController@setCookie');
Route::get('cat/{engine_id}', 'CatalogController@index')->name('catalog.index');
Route::get('group/{group_id}/{engine_id}/{slug?}', 'CatalogController@showGroup')->name('catalog.group');
Route::get('sgroup/{subgroup_id}/{engine_id}/{slug?}', 'CatalogController@showSubgroup')->name('catalog.subgroup');
Route::get('part/{part_id}/{subgroup_id}/{engine_id}/{slug?}', 'CatalogController@showPart')->name('catalog.part');
