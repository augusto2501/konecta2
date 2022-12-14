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

Route::get('/', function () {
    return view('welcome');
});

Route::get('products', 'ProductController@index')->name('products.index');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::post('products', 'ProductController@store')->name('products.store');
Route::get('products/{id}', 'ProductController@show')->name('products.show');
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::put('products/{id}', 'ProductController@update')->name('products.update');
Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');

Route::get('sales', 'SaleController@index')->name('sales.index');
Route::post('sales/create', 'SaleController@create')->name('sales.create');

Route::get('report', 'ProductController@report')->name('products.report');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
