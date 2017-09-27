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
 * ADMIN PRODUCTS CATALOG
 */
Route::group(['middleware' => ['auth', 'auth.admin'], 'namespace' => 'Admin'], function(){
    Route::post('/admin/productos/subir', 'ProductsController@upload')->name('admin.products.upload');
    Route::post('/admin/productos/create', 'ProductsController@create')->name('admin.products.create');
    Route::post('/admin/productos/{product}/store', 'ProductsController@store')->name('admin.products.store');
    Route::post('/admin/productos/get-unassigned-files', 'ProductsController@getUnassignedFiles')->name('admin.products.get-unassigned-files');
    Route::post('/admin/productos/get-unassigned-products', 'ProductsController@getUnassignedProducts')->name('admin.products.get-unassigned-products');
    Route::post('/admin/productos/get-files', 'ProductsController@getFiles')->name('admin.products.get-files');
    Route::get('/admin/productos/catalogo', 'ProductsController@catalog')->name('admin.products.catalog');
    Route::get('/admin/productos/{product?}', 'ProductsController@show')->name('admin.products.show');
    Route::get('/admin/productos/{product?}/clasificar', 'ProductsController@classify')->name('admin.products.classify');
});

/**
 * ADMIN OUTFITS
 */
Route::group(['middleware' => ['auth', 'auth.admin'], 'namespace' => 'Admin'], function(){
    Route::post('/admin/outfits/create/{user}', 'OutfitsController@create')->name('admin.outfits.create');
});

/**
 * ADMIN USERS
 */
Route::group(['middleware' => ['auth', 'auth.admin'], 'namespace' => 'Admin'], function(){
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
    Route::post('/cuestionario/guardar/{slug}', 'QuizController@store')->name('front.quiz.store');
    Route::get('/cuestionario/{quizName}/seccion/{slug?}', 'QuizController@section')->name('front.quiz.section');
    Route::get('/cuestionario/completo', 'QuizController@complete')->name('front.quiz.complete');
});

/**
 * FRONT USER
 */
Route::group(['middleware' => 'auth', 'namespace' => 'Front'], function(){
    Route::get('/usuario/seleccion-mas-reciente', 'UserController@latestOutfit')->name('front.user.latest-outfit');
    Route::get('/usuario/carrito', 'UserController@cart')->name('front.user.cart');
});

/**
 * FRONT CART
 */
Route::group(['middleware' => 'auth', 'namespace' => 'Front'], function(){
    Route::post('/cart/add-products-to-cart', 'CartController@addProducts')->name('front.cart.add-products');
    Route::post('/cart/remove-product-from-cart', 'CartController@removeProduct')->name('front.cart.remove-product');
    Route::get('/carrito', 'CartController@show')->name('front.cart.show');
});

/**
 * FRONT SHIPPING
 */
Route::group(['middleware' => 'auth', 'namespace' => 'Front'], function(){
    Route::post('/shipping/add-address', 'ShippingController@addAddress')->name('front.shipping.add-address');
    Route::post('/shipping/set-cart-address', 'ShippingController@setCartAddress')->name('front.shipping.set-cart-address');
    Route::get('/envio', 'ShippingController@show')->name('front.shipping.show');
});

/**
 * FRONT SHIPPING
 */
Route::group(['middleware' => 'auth', 'namespace' => 'Front'], function(){
    Route::get('/checkout', 'CheckoutController@show')->name('front.checkout.show');
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
