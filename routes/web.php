<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/login','login')->name('login.login');
Route::view('/signup','signup')->name('signup.signup');

Route::post('registercustomer',[AuthController::class,'register'])->name('registercustomer.register');
Route::post('loginuser',[AuthController::class,'login'])->name('loginuser.login');

Route::view('app','userlayout.app')->name('userlayout.app');

Route::middleware('auth')->group(function () {
    Route::view('app','userlayout.app')->name('userlayout.app');
    Route::post('logout',[AuthController::class,' logout'])->name('logout.logout');
    Route::view('category','user.category')->name('user.category');
    Route::view('order','user.order')->name('user.order');
    // Route::view('myorder','user.myorders')->name('user.myorders');
    Route::view('shoppingcart','user.shoppingcart')->name('user.shoppingcart');
    Route::view('test','admin.products')->name('admin.products');
    Route::view('addproduct','admin.addproduct')->name('admin.addproduct');

});
