<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\StoresController;
use App\Models\Product;
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

Route::get('/', [ProductController::class, 'index'])->name('home');

// de navbar items die nu doorverwijzen naar een eigen pagina
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/stores', [StoresController::class, 'index'])->name('stores');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::get('/products/{slug}', [ProductController::class, 'show']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

// het toevoegen, updaten en deleten van de producten
Route::middleware('auth')->get('product/add', [ProductController::class, 'addProduct'])->name('addProduct');
Route::post('product/store', [ProductController::class, 'create'])->name('products.store');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');



Route::get('/products/{slug}/cart', [ProductController::class, 'addToCart'])->name('add.to.cart');

Route::get('/cart', [CartController::class, 'index']);

Route::post('/payment/checkout', [PaymentController::class, 'checkout'] )->name('payment.checkout');
Route::get('/payment/success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('/payment/cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');

Route::post('/remove/{slug}', [ProductController::class, 'removeFromCart'])->name('remove.from.cart');