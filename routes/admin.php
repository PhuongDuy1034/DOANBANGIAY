<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Arr;
 Route::group(['prefix' => '/'], function () {
  Route::get('login', [Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
  Route::post('login', [Admin\LoginController::class, 'login'])->name('admin.login.post');
  Route::get('logout', [Admin\LoginController::class, 'logout'])->name('admin.logout');

Route::get('/', function () {
return view('admin.dashboard.index');
});

});
Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/', function () {
    return view('admin.dashboard.index');
    })->name('admin.dashboard');
});
//  Route::get('admin','admin.dashboard.index')->name('admin.dashboard.index');
