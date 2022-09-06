<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Main Routes
Route::get('/',[AppController::class,'index'])->name('home');
Route::get('about',[AppController::class,'about'])->name('about');
Route::get('cart',[AppController::class,'cart'])->name('cart');
Route::get('product',[AppController::class,'product'])->name('product');
Route::get('best',[AppController::class,'best'])->name('best');
Route::get('special',[AppController::class,'special'])->name('special');

// Auth Routes
Route::post('login',[AuthController::class,'loginUser'])->name('loginUser');
Route::post('register',[AuthController::class,'registerUser'])->name('registerUser');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('myaccount',[AuthController::class,'myAccount'])->name('myaccount');
