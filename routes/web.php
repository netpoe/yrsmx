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

/**
 * ADMIN
 */
Route::get('/admin/ingresa', 'AdminAuthController@ingresa')->name('admin.auth.ingresa');
Route::post('/admin/login', 'AdminAuthController@login')->name('admin.auth.login');

/**
 * ADMIN PRODUCTS CATALOG
 */
Route::group(['middleware' => 'auth'], function(){
    Route::post('/admin/productos/subir', 'AdminProductsController@upload')->name('admin.products.upload');
    Route::post('/admin/productos/create', 'AdminProductsController@create')->name('admin.products.create');
    Route::post('/admin/productos/get-unassigned-files', 'AdminProductsController@getUnassignedFiles')->name('admin.products.get-unassigned-files');
    Route::get('/admin/productos/catalogo', 'AdminProductsController@catalog')->name('admin.products.catalog');
    Route::get('/admin/productos/{productId}', 'AdminProductsController@show')->name('admin.products.show');
});

/**
 * FRONT QUIZ
 */
Route::group([], function(){
    Route::post('/cuestionario/crear', 'QuizController@create')->name('front.quiz.create');
    Route::get('/cuestionario/comienza', 'QuizController@new')->name('front.quiz.new');
});

Route::group(['middleware' => 'auth'], function(){
    Route::post('/cuestionario/{quiz}/guardar/{slug}', 'QuizController@store')->name('front.quiz.store');
    Route::get('/cuestionario/{quiz}/seccion/{slug}/{hasError?}/{message?}', 'QuizController@section')->name('front.quiz.section');
});

/**
 * AUTH
 */
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
