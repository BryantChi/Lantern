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
    return view('index');
});

Route::any('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "All Cache is cleared";
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::any('/temple', 'TempleInfoController@temple');
Route::any('/temple/getDistrict/{city}', 'TempleInfoController@getDistrict')->name('GetTempleDistrict');
Route::any('/TempleSelectSearch', 'TempleInfoController@selectSearch')->name('TempleSelectSearch');

Route::get('/rich_gold', function () {
    return view('rich_gold');
});

Route::get('/certificate', function () {
    return view('certificate');
});
