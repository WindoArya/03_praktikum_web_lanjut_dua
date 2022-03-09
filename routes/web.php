<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavigationController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::prefix('products')->group(function(){
    Route::get('/', [NavigationController::class, 'products'])->name('products');
});

Route::get('/news', [NavigationController::class, 'news'])->name('news');
Route::get('/about-us', [NavigationController::class, 'aboutus'])->name('aboutus');
Route::get('/contact-us', [NavigationController::class, 'contactus'])->name('contactus');