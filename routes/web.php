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

Route::get('/', function () {
    return view('welcome');
});

//halaman awal
Route::get('/', [HomeController::class, 'index']);

//menampilkan produk
use App\Http\Controllers\ProductsController;

Route::prefix('category')->group(function () {
    Route::get('/food-beverages', [ProductsController::class, 'foodBeverages']);
    Route::get('/beauty-health', [ProductsController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductsController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductsController::class, 'babyKid']);
});

use App\Http\Controllers\ProfilController;
Route::get('/profile/{id}/{name}', [ProfilController::class, 'index']);

use App\Http\Controllers\SalesController;
Route::get('/sales', [SalesController::class, 'index']);