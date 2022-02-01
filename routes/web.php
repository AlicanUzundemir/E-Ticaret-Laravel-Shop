<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Front\AccountController;
use App\Http\Controllers\Front\BasketController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ProductController;
use Database\Seeders\CategorySeeder;
use Illuminate\Support\Facades\Route;
use Route as GlobalRoute;

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
Route::get('product-detail',[ProductController::class,'productDetailShow'])->name('productDetail');

Route::get('products', [ProductController::class, 'index'])->name('products');
Route::post('products', [ProductController::class, 'index'])->name('post.products');

Route::get('product-summary',[ProductController::class,'productDetailSummary'])->name('productSummary');
    
Route::get('login',[AccountController::class,'login'])->name('account.login');

Route::get('categories',[ProductController::class,'categories'])->name('categories');

//Route::post('search', [ProductController::class, 'search'])->name('search');
//Route::get('search', [ProductController::class, 'search'])->name('get.search');
Route::match(['get', 'post'], 'search', [ProductController::class, 'search'])->name('search');

Route::get('product-detail/{slug}',[ProductController::class,'show'])->name('product-detail');

Route::get('category/{slug}/{id}', [ProductController::class, 'category'])->name('category');
Route::resource('basket',BasketController::class);
Route::resource('account',AccountController::class);

Route::group(['prefix' => 'accounts', 'as' => 'account.'],function(){

    Route::post('access', [AccountController::class, 'login'])->name('login_post');
    Route::get('register',[AccountController::class, 'accountForm'])->name('registerPage');
    Route::post('register',[AccountController::class, 'register'])->name('register_post');
    Route::post('logout', [AccountController::class, 'logout'])->name('logout');
    Route::get('activation/{token}',[AccountController::class, 'activation'])->name('activation');
});

Route::get('login',[AuthController::class, 'adminLoginForm'])->name('login');
Route::post('login',[AuthController::class, 'adminLogin'])->name('post.login');

Route::group(['prefix' => 'admin' , 'middleware' => 'admin' , 'as' => 'admin.'], function() {

    Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('categories', [A_CategoryController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [A_CategoryController::class, 'create'])->name('categories.create');
    Route::post('categories/store', [A_CategoryController::class, 'store'])->name('categories.store');
    Route::get('categories/edit/{id}', [A_CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('categories/update/{id}', [A_CategoryController::class, 'update'])->name('categories.update');
    Route::delete('categories/destroy/{id}', [A_CategoryController::class, 'destroy'])->name('categories.destroy');

});




Route::group(['prefix' => 'accounts', 'middleware' => 'auth', 'as' => 'account.'], function () {

    Route::get('dashboard1', function () {
        return [
            'name' => 'login olmuş sayfa -2'
        ];
    })->name('dashboard');

    Route::get('admin', function () {
        return [
            'name' => 'admin sayfası'
        ];
    });
});
Route::get('dashboard', function () {
    return [
        'name' => 'login olmuş sayfa'
    ];
})->middleware('auth');

