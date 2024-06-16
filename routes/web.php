<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::name('user.')->group(function () {
    // Default route, accessible at root '/'
    Route::get('/', 'IndexController@index')->name('index');

    // Route with optional State and city parameters
    Route::get('home/{State?}/{city?}', 'IndexController@index')->name('index');
    Route::get('/about/{State?}/{city?}', 'IndexController@about')->name('about');
    Route::get('/services/{State?}/{city?}', 'IndexController@service')->name('services');
    Route::get('/service/{slug}/{State?}/{city?}', 'IndexController@service')->name('service');
    Route::get('/blog', 'IndexController@blog')->name('blog');
    Route::get('/contact/{State?}/{city?}', 'IndexController@contact')->name('contact');
    Route::post('/contact/submit', 'IndexController@contact')->name('contact.submit');
    Route::get('/faqs/{State?}/{city?}', 'IndexController@about')->name('faqs');
    Route::get('/{slug}', 'IndexController@about')->name('page');
});
