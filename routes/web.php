<?php

use App\Http\Controllers\Front\AccountController;
use App\Http\Controllers\Front\BasketController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



//Route::get('home','frontend/homepage')->name('homepage');
Route::get('/',[HomeController::class,'index'])->name('homepage');

Route::get('product',[ProductController::class,'index'])->name('product');
Route::get('product-detail',[ProductController::class,'show'])->name('product-detail');
    
Route::resource('basket',BasketController::class);
Route::resource('account',AccountController::class);
Route::get('login',[AccountController::class,'login'])->name('account.login');
