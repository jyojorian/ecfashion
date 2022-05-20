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

Route::get('/', 'App\Http\Controllers\aaa@index')->name('index');

Route::name('product.')
    ->group(function () {
        Route::get('/a', 'App\Http\Controllers\ProductController@index')->name('index');
        Route::get('/product/{id}', 'App\Http\Controllers\ProductController@show')->name('show');
        Route::get('/success', 'App\Http\Controllers\ProductController@success')->name('success');
    });

Route::name('line_item.')
    ->group(function () {
        Route::post('/line_item/create', 'App\Http\Controllers\LineItemController@create')->name('create');
        Route::post('/line_item/delete', 'App\Http\Controllers\LineItemController@delete')->name('delete');
    });

Route::name('cart.')
    ->group(function () {
        Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('index');
        Route::get('/cart/checkout', 'App\Http\Controllers\CartController@checkout')->name('checkout');
        Route::get('/cart/success', 'App\Http\Controllers\CartController@success')->name('success');
        Route::get('/cart/redirect', 'App\Http\Controllers\CartController@redirect')->name('redirect');
    });
