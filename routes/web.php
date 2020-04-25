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


Route::group([
    'prefix' => 'catalog',
    'namespace' => 'Product'
], function (){
    Route::get('/', 'ProductController@index');
    Route::get('/{category}', 'ProductController@showCategory');
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
