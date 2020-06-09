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

Route::name('webhooks.mollie')->any('/webhooks/mollie', 'WebhookController@handle');


// redirect / to english 
Route::redirect('/', '/en');

//  Language group with routes of existing webpages
Route::group(['prefix' => '{language}'], function () {
    //  Routes HomeController
    Route::get('/', 'HomeController@home')->name('home');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/privacy', 'HomeController@privacy')->name('privacy');
    //  newsblog
    Route::get('/newsblog', 'NewsblogController@newsblog')->name('newsblog');
    Route::get('/newsblog/detailpage', 'NewsblogController@detailpage')->name('detailpage');
    //  Route::get('/{slug}', 'PagesController@getPage')->name('page');
    Route::get('/donate', 'DonateController@donate')->name('donate');
    //  Route::post('/donate', 'DonateController@postDonate')->name('donate.post');
    Route::post('/donate', 'DonateController@postDonatePayment')->name('donate.payment');
    Route::get('/donate/paymentsucces', 'DonateController@getSucces')->name('donate.succespayment');
});
Route::post('/newsletter', 'NewsletterController@postNewsletter')->name('newsletter.post');
Route::get('/newsletter/subscribed', 'NewsletterController@subscribedNewsletter')->name('newsletter.subscribed');

// Admin page routes 
Route::group(['prefix' => 'admin'], function () {

    //  authentication
    Auth::routes();
    Route::get('/index', 'AdminController@adminPage')->name('admin');

    //  create new pages
    Route::get('/pages/create', 'AdminController@getCreatePage')->name('pages.create');
    Route::post('/pages/create', 'AdminController@postCreatePage')->name('pagescreate.post');
    Route::get('/pages/edit/{page}', 'AdminController@getEditPage')->name('pages.edit');
    Route::post('/pages/edit/{page}', 'AdminController@postEditPage')->name('pages.edit.post');
    Route::post('/pages/delete', 'AdminController@postDeletePage')->name('pages.delete');
    
    //  Edit existing pages
    //  homepage
    Route::get('/pages/edithome/{home}', 'AdminController@getEditHome')->name('pages.edithome');
    Route::post('/pages/edithome/{home}', 'AdminController@postEditHome')->name('pages.edithome.post');
    
    //  about page
    Route::get('/pages/editabout/{about}', 'AdminController@getEditAbout')->name('pages.editabout');
    Route::post('/pages/editabout/{about}', 'AdminController@postEditAbout')->name('pages.editabout.post');
    
    //  contact page
    Route::get('/pages/editcontact/{contact}', 'AdminController@getEditContact')->name('pages.editcontact');
    Route::post('/pages/editcontact/{contact}', 'AdminController@postEditContact')->name('pages.editcontact.post');

    //  newsblog page
    Route::get('/pages/editnewsblog/{newsblog}', 'AdminController@getEditNewsblog')->name('pages.editnewsblog');
    Route::post('/pages/editnewsblog/{newsblog}', 'AdminController@postEditNewsblog')->name('pages.editnewsblog.post');
    Route::get('/pages/addnewsblog', 'AdminController@getAddNewsblog')->name('pages.addnewsblog');
    Route::post('/pages/addnewsblog', 'AdminController@postAddNewsblog')->name('pages.addnewsblog.post');
    Route::post('/pages/addnewsblog/delete', 'AdminController@getdeleteNewsblog')->name('pages.deletenewsblog');

    //  donate page
    Route::get('/pages/editdonate/{donate}', 'AdminController@getEditDonate')->name('pages.editdonate');
    Route::post('/pages/editdonate/{donate}', 'AdminController@postEditDonate')->name('pages.editdonate.post');

    //  privacy page
    Route::get('/pages/editprivacy/{privacy}', 'AdminController@getEditPrivacy')->name('pages.editprivacy');
    Route::post('/pages/editprivacy/{privacy}', 'AdminController@postEditPrivacy')->name('pages.editprivacy.post');
});
// Route::post('/home', 'HomeController@home')->name('home');
// Route::get('/{slug}', 'PagesController@getPage')->name('page');

