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

Route::get('/', function () {
    return view('admin/user/profile');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('front.home.index');
Route::get('/bienvenido/{token}', 'HomeController@welcome')->name('front.home.welcome');
Route::get('/verification-email-sent', 'HomeController@verificationEmailSent')->name('front.home.verification-email-sent');
Route::post('/', 'HomeController@register')->name('front.home.register');

Route::group(['middleware' => 'auth'], function(){
    Route::post('/aplicar/store/{slug}', 'ApplicationController@store')->name('front.application.store');
    Route::get('/aplicar/seccion/{slug?}/{hasError?}/{message?}', 'ApplicationController@seccion')->name('front.application.seccion');
    Route::get('/aplicar/completa', 'ApplicationController@completa')->name('front.application.completa');
});