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


Route::get('/homepage', [App\Http\Controllers\PagesController::class, 'index'])->name('index')->middleware('auth');
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about')->middleware('auth');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::get('/how-to-order', [App\Http\Controllers\PagesController::class, 'order'])->name('order');
Route::get('/product', [App\Http\Controllers\PagesController::class, 'product'])->name('product')->middleware('auth');
Route::post('/pages/contact', [App\Http\Controllers\PagesController::class, 'store'])->name('store')->middleware('auth');


Route::get('/order/items/{id}', [App\Http\Controllers\OrderController::class, 'items'])->name('items')->middleware('auth');
Route::get('/order/show', [App\Http\Controllers\OrderController::class, 'show'])->name('show')->middleware('auth');
Route::post('/pages/order', [App\Http\Controllers\OrderController::class, 'store'])->name('store')->middleware('auth');
Route::get('/create', [App\Http\Controllers\OrderController::class, 'create'])->name('create');
Route::delete('/order/items/{order}', [App\Http\Controllers\OrderController::class, 'destroy'])->name('destroy')->middleware('auth');



Route::get('/pages/contact/contactitems/{id}', [App\Http\Controllers\ContactController::class, 'contactitems'])->name('contactitems');
Route::get('/pages/contact/show', [App\Http\Controllers\ContactController::class, 'showcontact'])->name('showcontact');



Auth::routes([
   'register' => false
]);

// Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


