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


Route::name('user.')->group(
    function () {
        Route::get('/', 'IndexController@index')->name('index');
        Route::get('/about', 'IndexController@about')->name('about');
        Route::get('/services', 'IndexController@service')->name('services');
        Route::get('/service{slug}', 'IndexController@service')->name('service');
        Route::get('/blog', 'IndexController@blog')->name('blog');
        Route::get('/contact', 'IndexController@contact')->name('contact');
        Route::get('/{slug}', 'IndexController@about')->name('page');
        Route::get('/faqs', 'IndexController@about')->name('faqs');
        // Route::get('/', 'IndexController@about')->name('about');
    }
);
