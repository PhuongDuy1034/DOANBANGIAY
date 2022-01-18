<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Arr;
 Route::group(['prefix' => '/'], function () {
  Route::get('login', [Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
  Route::post('login', [Admin\LoginController::class, 'login'])->name('admin.login.post');
  Route::get('logout', [Admin\LoginController::class, 'logout'])->name('admin.logout');
  Route::get('register', [Admin\RegisterController::class, 'showRegisterForm'])->name('admin.register');
  Route::get('productType',[Admin\ProductTypeController::class,'index'])->name('admin.productType.index');
  Route::get('provider',[Admin\ProvidersController::class,'index'])->name('admin.provider.index');
  Route::get('product',[Admin\ProductController::class,'index'])->name('admin.product.index');
  Route::get('cart',[Admin\cartController::class,'index'])->name('admin.cart.index');
  Route::get('invoice',[Admin\invoiceController::class,'index'])->name('admin.invoice.index');
  Route::get('invoiceDetail',[Admin\invoiceDetailController::class,'index'])->name('admin.invoiceDetail.index');


  Route::get('Account', [Admin\AccountController::class, 'index'])->name('admin.account.index');
   Route::post('Account', [Admin\AccountController::class, 'create'])->name('admin.account.create');
  // Route::resource('/Account',[Admin\AccountController::class]);
  Route::get('/', function () {
    return view('admin.dashboard.index');
    });
});
Route::group(['middleware' => ['auth:admin']], function () {
  Route::get('/', function () {
  return view('admin.dashboard.index');
  })->name('admin.dashboard');
});

