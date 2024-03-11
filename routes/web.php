<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;

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

Route::get('/', [HomeController::class, 'getAllCategoryList']);
Route::any('/RejisterCustomer', [CartController::class, 'RejisterCustomer'])->name('RejisterCustomer');
Route::any('/proceed', [CartController::class, 'proceed'])->name('proceed');

Route::any('/AboutUs', [HomeController::class, 'AboutUs'])->name('AboutUs');

Route::any('/Authlogin', [CartController::class, 'Authlogin'])->name('Authlogin');
Route::any('/PlaceOrder', [CartController::class, 'PlaceOrder'])->name('PlaceOrder');
Route::get('/category/{categoryId}', [HomeController::class, 'getInsideCategortProductList']);

//ajax load 
Route::match(['get', 'post'], '/view_cart', [CartController::class, 'viewCart'])->name('view_cart');
Route::post('cart/remove', 'CartController@removeItem')->name('remove-from-cart');
Route::any('/checkout', [CartController::class, 'checkout'])->name('checkout');
