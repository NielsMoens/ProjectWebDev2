<?php

use Illuminate\Support\Facades\Auth;
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
    // Route::get('/{slug}', 'PagesController@getPage')->name('page');
});

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
    Route::get('/index', 'AdminController@adminPage')->name('admin');
    Route::get('/pages/edithome', 'AdminController@getEditHomePage')->name('pages.edithome');
    Route::post('/pages/edithome', 'AdminController@postEditHomePage')->name('pages.edithome.post');


    Route::get('/pages/create', 'AdminController@getCreatePage')->name('pages.create');
    Route::post('/pages/create', 'AdminController@postCreatePage')->name('pagescreate.post');
    Route::get('/pages/edit/{page}', 'AdminController@getEditPage')->name('pages.edit');
    Route::post('/pages/edit/{page}', 'AdminController@postEditPage')->name('pages.edit.post');
    Route::post('/pages/delete', 'AdminController@postDeletePage')->name('pages.delete');

    Route::post('/pages/delete', 'AdminController@postDeletePage')->name('pages.delete');

    

    
});
// Route::post('/home', 'HomeController@home')->name('home');
Route::get('/{slug}', 'PagesController@getPage')->name('page');

