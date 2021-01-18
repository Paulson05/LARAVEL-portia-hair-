<?php

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

Route::get('/', function () {
    return view('pages.homepage');
});


Route::get('/homepage', [App\Http\Controllers\PagesController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::get('/how-to-order', [App\Http\Controllers\PagesController::class, 'order'])->name('order');
Route::get('/product', [App\Http\Controllers\PagesController::class, 'product'])->name('product');


Route::get('/create', [App\Http\Controllers\OrderController::class, 'create'])->name('create');


Auth::routes();

Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


