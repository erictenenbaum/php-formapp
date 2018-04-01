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

Route::get('/', 'PagesController@index');

Route::get('/form', 'PagesController@form');

Route::get('/company', 'PagesController@company');

Route::get('/login', 'PagesController@login');

Route::get('/dashboard', 'PagesController@dashboard');

Route::resource('customer', 'CustomersController');
Route::resource('company', 'CompaniesController');

// Captcha Verify
// Route::post('https://www.google.com/recaptcha/api/siteverify', 'CustomerController@captcha');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
