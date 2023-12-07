<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


Route::get('/','App\Http\Controllers\ProductController@getIndex')->name('product.index');
Route::get('/product/{id}', 'App\Http\Controllers\ProductController@productView');

Route::get('/user/signin', [
    'uses' => 'App\Http\Controllers\UserController@getSignin',
    'as' => 'user.getsignin'
]);
 Route::post('/user/signin', [
     'uses' => 'App\Http\Controllers\UserController@postSignin',
     'as' => 'user.setsignin'
 ]);



Route::get('/admin/product', [UserController::class, 'getAdminProduct'])->name('user.adminProduct');
Route::get('/admin/product/{id}', 'App\Http\Controllers\ProductController@AdminProductView');


Route::patch('/admin/product/{product:id}', [ProductController::class, 'update'])->name('products.update');