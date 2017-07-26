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
 * ADMIN AUTH
 */
Route::group(['middleware' => 'auth', 'namespace' => 'Admin'], function(){
    Route::get('/admin/ingresa', 'AuthController@ingresa')->name('admin.auth.ingresa');
    Route::post('/admin/login', 'AuthController@login')->name('admin.auth.login');
});

/**
 * ADMIN PRODUCTS CATALOG
 */
Route::group(['middleware' => 'auth', 'namespace' => 'Admin'], function(){
    Route::post('/admin/productos/subir', 'ProductsController@upload')->name('admin.products.upload');
    Route::post('/admin/productos/create', 'ProductsController@create')->name('admin.products.create');
    Route::post('/admin/productos/get-unassigned-files', 'ProductsController@getUnassignedFiles')->name('admin.products.get-unassigned-files');
    Route::get('/admin/productos/catalogo', 'ProductsController@catalog')->name('admin.products.catalog');
    Route::get('/admin/productos/{productId}', 'ProductsController@show')->name('admin.products.show');
});

/**
 * ADMIN USERS
 */
Route::group(['middleware' => 'auth', 'namespace' => 'Admin'], function(){
    Route::get('/admin/usuarios', 'UsersController@index')->name('admin.users.index');
    Route::get('/admin/usuarios/perfil/{user}', 'UsersController@profile')->name('admin.users.profile');
});

/**
 * FRONT QUIZ
 */
Route::group(['namespace' => 'Front'], function(){
    Route::post('/cuestionario/crear', 'QuizController@create')->name('front.quiz.create');
    Route::get('/cuestionario/comienza', 'QuizController@new')->name('front.quiz.new');
});

Route::group(['middleware' => 'auth', 'namespace' => 'Front'], function(){
    Route::post('/cuestionario/{quiz}/guardar/{slug}', 'QuizController@store')->name('front.quiz.store');
    Route::get('/cuestionario/{quiz}/seccion/{slug?}', 'QuizController@section')->name('front.quiz.section');
    Route::get('/cuestionario/completo', 'QuizController@complete')->name('front.quiz.complete');
});

/**
 * FRONT VERIFICATION
 */
Route::group(['namespace' => 'Front'], function(){
    Route::get('/verificacion/{token}', 'VerificationController@verifyEmail')->name('front.verification.verifyEmail');
});

/**
 * AUTH
 */
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/', 'HomeController@index')->name('front.home.index');
Route::get('/bienvenido/{token}', 'HomeController@welcome')->name('front.home.welcome');
Route::get('/verification-email-sent', 'HomeController@verificationEmailSent')->name('front.home.verification-email-sent');
Route::post('/', 'HomeController@register')->name('front.home.register');
