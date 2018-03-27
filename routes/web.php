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


// Route::get('/contact', function () {
//     return view('contact');
// });




Route::get('/', function () {
    return view('index');
});

// Route::get('/index', function () {
//     return view('index');
// });


Auth::routes();

Route::get('/services', 'ServicesController@index')->name('services');

Route::get('/home', 'HomeController@home')->name('home');

// Route::get('/home', 'HomeController@returnhome')->name('returnhome');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');

Route::get('verify/{email}/{verifytoken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');