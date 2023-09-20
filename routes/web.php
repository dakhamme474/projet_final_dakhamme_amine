<?php

use App\Http\Controllers\HomeController;
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

Route::get('/' , [HomeController::class , "index"])->name("home.index");
Route::get('/shopingcart' , [HomeController::class , "cart"])->name("shopingcart.cart");
Route::get('/shopingcategory' , [HomeController::class , "category"])->name("shopingcategory.category");
Route::get('/contact' , [HomeController::class , "contact"])->name("contact.contact");
Route::get('/login' , [HomeController::class , "login"])->name("login.login");

