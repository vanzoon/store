<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Store\StoreController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'create']);

Route::get('/store', [StoreController::class, 'index'])->name('store_homepage');
Route::get('/', [StoreController::class, 'index'])->name('store_homepage');

Route::group(['prefix' => 'categories'], function () {
  Route::get('/', [StoreController::class, 'category_list'])->name('category_list');
  Route::get('/{category:slug}', [StoreController::class, 'category_detail'])->name('category_detail');
});

Route::group(['prefix' => 'products'], function () {
  Route::get('/{product:slug}', [StoreController::class, 'product_detail'])->name('product_detail');
  Route::patch('/{product:slug}', [StoreController::class, 'product_update'])->name('product_update');
  Route::delete('/{product:slug}', [StoreController::class, 'product_delete'])->name('product_delete');
});
