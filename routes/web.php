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

Route::redirect('/', '/en');

Route::group(['prefix' => '{language}'], function () {
    Route::get('/', 'HomeController@home')->name('home');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/privacy', 'HomeController@privacy')->name('privacy');
    Route::get('/newsletter', 'HomeController@newsletter')->name('newsletter');
    
    Route::get('newsblog', 'NewsblogController@newsblog')->name('newsblog');
    Route::get('newsblog/detailpage', 'NewsblogController@detailpage')->name('detailpage');

    Route::get('/donate', 'DonateController@donate')->name('donate');
    Route::get('/donatepayment', 'DonateController@donate')->name('donatepayment');

    Route::get('/admin', 'AdminController@admin')->name('admin');

});
