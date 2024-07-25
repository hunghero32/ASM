<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
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

Route::get('/demo', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin', [ProductController::class, 'index'])->name('admin.index');
    Route::get('/admin/create', [ProductController::class, 'create'])->name('admin.create');
    Route::post('/admin/create', [ProductController::class, 'store'])->name('admin.store');
    Route::get('/admin/{product}', [ProductController::class, 'show'])->name('admin.show');
    Route::get('/admin/{product}/edit', [ProductController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/{product}/edit', [ProductController::class, 'update'])->name('admin.update');
    Route::delete('/admin/{product}', [ProductController::class, 'destroy'])->name('admin.destroy');

    Route::get('/cart', [CartController::class, 'show'])->name('cart.show');
    Route::post('/cart/add', [CartController::class, 'store'])->name('cart.add');
    Route::post('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::delete('/cart/remove/{cart}', [CartController::class, 'destroy'])->name('cart.remove');
    
});
require __DIR__ . '/auth.php';



// Route::get('/admin', [ProductController::class, 'index'])->name('admin.index');
// Route::get('/admin/create', [ProductController::class, 'create'])->name('admin.create');
// Route::post('/admin', [ProductController::class, 'store'])->name('admin.store');
// Route::get('/admin/{product}', [ProductController::class, 'show'])->name('admin.show');
// Route::get('/admin/{product}/edit', [ProductController::class, 'edit'])->name('admin.edit');
// Route::put('/admin/{product}', [ProductController::class, 'update'])->name('admin.update');
// Route::delete('/admin/{product}', [ProductController::class, 'destroy'])->name('admin.destroy');

Route::get('/', [ProductController::class, 'indexpro'])->name('guest.index');
Route::get('/{product}', [ProductController::class, 'showpro'])->name('guest.show');
