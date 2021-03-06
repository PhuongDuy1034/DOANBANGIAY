<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Auth;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Arr;
 Route::group(['prefix' => '/'], function () {
  Route::get('login', [Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
  Route::post('login', [Admin\LoginController::class, 'login'])->name('admin.login.post');
  Route::get('logout', [Admin\LoginController::class, 'logout'])->name('admin.logout');
  Route::get('userlogout', [Admin\LoginController::class, 'userlogout'])->name('user.logout');
  Route::get('register', [Admin\RegisterController::class, 'showRegisterForm'])->name('admin.register');
  //productType
  Route::get('productType',[Admin\ProductTypeController::class,'index'])->name('admin.productType.index');
  Route::get('addproductType',[Admin\ProductTypeController::class,'create'])->name('admin.productType.create');
  Route::post('addproductType',[Admin\ProductTypeController::class,'store'])->name('admin.productType.store');
  Route::get('editproductType/{id}',[Admin\ProductTypeController::class,'edit'])->name('admin.productType.edit');
  Route::post('{id}/editproductType',[Admin\ProductTypeController::class,'update'])->name('admin.productType.update');
  Route::get('showproductType',[Admin\ProductTypeController::class,'show'])->name('admin.productType.show');
  Route::get('destroyproductType/{id}',[Admin\ProductTypeController::class,'destroy'])->name('admin.productType.destroy');

  //
  Route::get('Account', [Admin\AccountController::class,'index'])->name('admin.account.index');
  Route::get('addAccount',[Admin\AccountController::class,'create'])->name('admin.account.create');
  Route::post('addAccount',[Admin\AccountController::class,'store'])->name('admin.account.store');
  Route::get('editAccount/{id}',[Admin\AccountController::class,'edit'])->name('admin.account.edit');
  Route::post('{id}/editAccount',[Admin\AccountController::class,'update'])->name('admin.account.update');
  Route::get('showAccount/{id}',[Admin\AccountController::class,'show'])->name('admin.account.show');
  Route::get('destroyAccount/{id}',[Admin\AccountController::class,'destroy'])->name('admin.account.destroy');
   //
   Route::get('user', [Admin\UserController::class,'index'])->name('admin.user.index');
  //  Route::get('addAccount',[Admin\UserController::class,'create'])->name('admin.account.create');
  //  Route::post('addAccount',[Admin\UserController::class,'store'])->name('admin.account.store');
  //  Route::get('editAccount/{id}',[Admin\UserController::class,'edit'])->name('admin.account.edit');
  //  Route::post('{id}/editAccount',[Admin\UserController::class,'update'])->name('admin.account.update');
  //  Route::get('showAccount/{id}',[Admin\UserController::class,'show'])->name('admin.account.show');
  //  Route::get('destroyAccount/{id}',[Admin\UserController::class,'destroy'])->name('admin.account.destroy');
  // //
  Route::get('provider',[Admin\ProvidersController::class,'index'])->name('admin.provider.index');
  Route::get('addprovider',[Admin\ProvidersController::class,'create'])->name('admin.provider.create');
  Route::post('addprovider',[Admin\ProvidersController::class,'store'])->name('admin.provider.store');
  Route::get('editprovider/{id}',[Admin\ProvidersController::class,'edit'])->name('admin.provider.edit');
  Route::post('{id}/editprovider',[Admin\ProvidersController::class,'update'])->name('admin.provider.update');
  Route::get('showprovider',[Admin\ProvidersController::class,'show'])->name('admin.provider.show');
  Route::get('destroyprovider/{id}',[Admin\ProvidersController::class,'destroy'])->name('admin.provider.destroy');
  //product
  Route::get('product',[Admin\ProductController::class,'index'])->name('admin.product.index');
  Route::get('addproduct',[Admin\ProductController::class,'create'])->name('admin.product.create');
  Route::post('addproduct',[Admin\ProductController::class,'store'])->name('admin.product.store');
  Route::get('editproduct/{id}',[Admin\ProductController::class,'edit'])->name('admin.product.edit');
  Route::post('{id}/editproduct',[Admin\ProductController::class,'update'])->name('admin.product.update');
  Route::get('showproduct',[Admin\ProductController::class,'show'])->name('admin.product.show');
  Route::get('destroyproduct/{id}',[Admin\ProductController::class,'destroy'])->name('admin.product.destroy');
  //cart
  Route::get('cart',[Admin\cartController::class,'index'])->name('admin.cart.index');
  Route::get('addcart',[Admin\cartController::class,'create'])->name('admin.cart.create');
  Route::post('addcart',[Admin\cartController::class,'store'])->name('admin.cart.store');
  Route::post('editcart',[Admin\cartController::class,'edit'])->name('admin.cart.edit');
  Route::post('editcart',[Admin\cartController::class,'update'])->name('admin.cart.update');
  Route::get('showcart',[Admin\cartController::class,'show'])->name('admin.cart.show');
  Route::get('destroycart/{id}',[Admin\cartController::class,'destroy'])->name('admin.cart.destroy');
  //invoice
  Route::get('invoice',[Admin\invoiceController::class,'index'])->name('admin.invoice.index');
  Route::get('addinvoice',[Admin\invoiceController::class,'create'])->name('admin.invoice.create');
  Route::post('addinvoice',[Admin\invoiceController::class,'store'])->name('admin.invoice.store');
  Route::get('editinvoice/{id}',[Admin\invoiceController::class,'edit'])->name('admin.invoice.edit');
  Route::post('{id}/editinvoice',[Admin\invoiceController::class,'update'])->name('admin.invoice.update');
  Route::get('showinvoice',[Admin\invoiceController::class,'show'])->name('admin.invoice.show');
  Route::get('destroyinvoice/{id}',[Admin\invoiceController::class,'destroy'])->name('admin.invoice.destroy');
  //
  Route::get('invoiceDetail',[Admin\invoiceDetailController::class,'index'])->name('admin.invoiceDetail.index');
  //

 
  // Route::get('Account', [Admin\AccountController::class, 'show'])->name('admin.account.show');
  
  Route::get('/', function () {
    return view('admin.dashboard.index');
    });
    //Route::resource('/Account',[Admin\AccountController::class]);
});
Route::group(['middleware' => ['auth:admin']], function () {
  Route::get('/', function () {
  return view('admin.dashboard.index');
  })->name('admin.dashboard');
});

