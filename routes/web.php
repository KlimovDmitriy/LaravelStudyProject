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

Route::get('/', 'MainPageController@index')->name('home');


Route::group([
    'prefix' => 'catalog',
    'namespace' => 'Product',
    'as' => 'catalog::'
], function (){
    Route::get('/', 'ProductController@index')->name('index');
    Route::get('/{category}', 'ProductController@showCategory')->name('show');
});

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin::'
], function (){
    Route::get('/', 'AdminController@index')->name('index');
    Route::get('/add', 'AdminController@addProduct')->name('add');
    Route::get('/remove', 'AdminController@removeProduct')->name('remove');
});
