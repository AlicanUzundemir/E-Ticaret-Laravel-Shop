<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
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
Route::get('/',[HomePageController::class,'homePage'])->name('homepage');

Route::get('product',[ProductController::class,'index'])->name('product');

Route::get('product-detail',[ProductDetailController::class,'index'])->name('productDetail');

Route::get('speacial-offer',[ProductDetailController::class,'speacialOffer'])->name('speaciloffer');
