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

const ADMIN_CONTROLLERS = 'App\Http\Controllers\Admin';
const ADMIN_AUTH_CONTROLLER = ADMIN_CONTROLLERS . '\\' . 'AuthController';
const ADMIN_PRODUCTS_CONTROLLER = ADMIN_CONTROLLERS . '\\' . 'ProductsController';
const ADMIN_USERS_CONTROLLER = ADMIN_CONTROLLERS . '\\' . 'UsersController';

const FRONT_CONTROLLERS = 'App\Http\Controllers\Front';
const FRONT_QUIZ_CONTROLLER = FRONT_CONTROLLERS . '\\' . 'QuizController';

/**
 * ADMIN AUTH
 */
Route::get('/admin/ingresa', ADMIN_AUTH_CONTROLLER . '@ingresa')->name('admin.auth.ingresa');
Route::post('/admin/login', ADMIN_AUTH_CONTROLLER . '@login')->name('admin.auth.login');

/**
 * ADMIN PRODUCTS CATALOG
 */
Route::group(['middleware' => 'auth'], function(){
    Route::post('/admin/productos/subir', ADMIN_PRODUCTS_CONTROLLER . '@upload')->name('admin.products.upload');
    Route::post('/admin/productos/create', ADMIN_PRODUCTS_CONTROLLER . '@create')->name('admin.products.create');
    Route::post('/admin/productos/get-unassigned-files', ADMIN_PRODUCTS_CONTROLLER . '@getUnassignedFiles')->name('admin.products.get-unassigned-files');
    Route::get('/admin/productos/catalogo', ADMIN_PRODUCTS_CONTROLLER . '@catalog')->name('admin.products.catalog');
    Route::get('/admin/productos/{productId}', ADMIN_PRODUCTS_CONTROLLER . '@show')->name('admin.products.show');
});

/**
 * ADMIN USERS
 */
Route::group(['middleware' => 'auth'], function(){
    Route::get('/admin/usuarios', ADMIN_USERS_CONTROLLER . '@index')->name('admin.users.index');
    Route::get('/admin/usuarios/perfil/{user}', ADMIN_USERS_CONTROLLER . '@profile')->name('admin.users.profile');
});

/**
 * FRONT QUIZ
 */
Route::group([], function(){
    Route::post('/cuestionario/crear', FRONT_QUIZ_CONTROLLER . '@create')->name('front.quiz.create');
    Route::get('/cuestionario/comienza', FRONT_QUIZ_CONTROLLER . '@new')->name('front.quiz.new');
});

Route::group(['middleware' => 'auth'], function(){
    Route::post('/cuestionario/{quiz}/guardar/{slug}', FRONT_QUIZ_CONTROLLER . '@store')->name('front.quiz.store');
    Route::get('/cuestionario/{quiz}/seccion/{slug?}', FRONT_QUIZ_CONTROLLER . '@section')->name('front.quiz.section');
    Route::get('/cuestionario/completo', FRONT_QUIZ_CONTROLLER . '@complete')->name('front.quiz.complete');
});

/**
 * AUTH
 */
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('front.home.index');
Route::get('/bienvenido/{token}', 'HomeController@welcome')->name('front.home.welcome');
Route::get('/verification-email-sent', 'HomeController@verificationEmailSent')->name('front.home.verification-email-sent');
Route::post('/', 'HomeController@register')->name('front.home.register');
