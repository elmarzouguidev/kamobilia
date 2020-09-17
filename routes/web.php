<?php

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

Route::get('/', ['uses' => 'SiteController@index', 'as' => 'home']);
Route::get('/nouveaux-produits', ['uses' => 'SiteController@news', 'as' => 'news']);
Route::get('/promos-du-mois', ['uses' => 'SiteController@promos', 'as' => 'promos']);

Route::get('/produits', ['uses' => 'ProductController@index', 'as' => 'products']);
Route::get('/produits/{slug}', ['uses' => 'ProductController@show', 'as' => 'products.single']);

Route::get('/categories', ['uses' => 'CategoryController@index', 'as' => 'categories']);
Route::get('/categories/{slug}', ['uses' => 'CategoryController@show', 'as' => 'categories.single']);

Route::get('/a-propos', ['uses' => 'SiteController@about', 'as' => 'about']);
Route::get('/contactez-nous', ['uses' => 'SiteController@contact', 'as' => 'contact']);

Route::get('/terms-of-use', ['uses' => 'SiteController@terms', 'as' => 'terms']);

Route::get('/checkout/{slug}', ['uses' => 'CheckoutController@index', 'as' => 'checkout']);
Route::post('/checkout/{slug}', ['uses' => 'CheckoutController@checkoutPerso', 'as' => 'checkout.perso']);
// ->where('slug','^([0-9A-Za-z\-]+)?bar([0-9A-Za-z\-]+)?');
//Route::get('/checkout/{slug}',['uses'=>'CheckoutController@show','as'=>'checkout.single']);

Route::get('/checkout/{slug}/cash-on-delivery',  ['uses' => 'CheckoutController@cashOnDelivery', 'as' => 'checkout.delivery']);
Route::post('/checkout/{slug}/cash-on-delivery', ['uses' => 'CheckoutController@cashOnDeliveryPost', 'as' => 'checkout.delivery'])
    ->middleware('throttle:rate_limit,1');

Route::get('/checkout/{slug}/credit-institution',  ['uses' => 'CheckoutController@creditBanque', 'as' => 'checkout.banque']);
Route::post('/checkout/{slug}/credit-institution', ['uses' => 'CheckoutController@creditBanquePost', 'as' => 'checkout.banque'])
    ->middleware('throttle:rate_limit,1');

Route::get('/checkout/{slug}/credit-direct',  ['uses' => 'CheckoutController@creditDirect', 'as' => 'checkout.direct']);
Route::post('/checkout/{slug}/credit-direct', ['uses' => 'CheckoutController@creditDirectPost', 'as' => 'checkout.direct'])
    ->middleware('throttle:rate_limit,1');
    
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
