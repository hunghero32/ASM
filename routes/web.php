<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PromoteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
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

    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');

    Route::prefix('admin/product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.index');
        Route::get('/admin/create/product/', [ProductController::class, 'create'])->name('admin.create');
        Route::post('/admin/create/product/', [ProductController::class, 'store'])->name('admin.store');
        Route::get('/{product}', [ProductController::class, 'show'])->name('admin.show');
        Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('admin.edit');
        Route::put('/{product}/edit', [ProductController::class, 'update'])->name('admin.update');
        Route::delete('/{product}', [ProductController::class, 'destroy'])->name('admin.destroy');
    });

    Route::prefix('admin/category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/admin/create/category/', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/admin/create/category/', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('admin.category.show');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::put('/{category}/edit', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
    });

    Route::prefix('admin/banners')->group(function () {
        Route::get('', [BannerController::class, 'index'])->name('banners.index');
        Route::get('/create', [BannerController::class, 'create'])->name('banners.create');
        Route::post('', [BannerController::class, 'store'])->name('banners.store');
        Route::get('/{banner}', [BannerController::class, 'show'])->name('banners.show');
        Route::get('/{banner}/edit', [BannerController::class, 'edit'])->name('banners.edit');
        Route::put('/{banner}', [BannerController::class, 'update'])->name('banners.update');
        Route::delete('/{banner}', [BannerController::class, 'destroy'])->name('banners.destroy');
    });
    Route::prefix('admin/invoices')->group(function () {
        Route::get('/', [InvoiceController::class, 'index'])->name('admin.invoices.index');
        Route::get('/{invoice}', [InvoiceController::class, 'show'])->name('admin.invoices.show');
        Route::delete('/{invoice}', [InvoiceController::class, 'destroy'])->name('admin.invoices.destroy');
    });
    Route::prefix('admin/promotes')->group(function () {
        Route::get('/', [PromoteController::class, 'index'])->name('admin.promotes.index');
        Route::get('/create', [PromoteController::class, 'create'])->name('admin.promotes.create');
        Route::post('/', [PromoteController::class, 'store'])->name('admin.promotes.store');
        Route::get('/{promote}', [PromoteController::class, 'show'])->name('admin.promotes.show');
        Route::get('/{promote}/edit', [PromoteController::class, 'edit'])->name('admin.promotes.edit');
        Route::put('/{promote}', [PromoteController::class, 'update'])->name('admin.promotes.update');
        Route::delete('/{promote}', [PromoteController::class, 'destroy'])->name('admin.promotes.destroy');
    });
    Route::prefix('cart')->group(function () {
        Route::get('/', [CartController::class, 'show'])->name('cart.show');
        Route::post('/add', [CartController::class, 'store'])->name('cart.add');
        Route::post('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
        Route::delete('/remove/{cart}', [CartController::class, 'destroy'])->name('cart.remove');
    });
});
require __DIR__ . '/auth.php';



// Route::get('/admin', [ProductController::class, 'index'])->name('admin.index');
// Route::get('/admin/create', [ProductController::class, 'create'])->name('admin.create');
// Route::post('/admin', [ProductController::class, 'store'])->name('admin.store');
// Route::get('/admin/{product}', [ProductController::class, 'show'])->name('admin.show');
// Route::get('/admin/{product}/edit', [ProductController::class, 'edit'])->name('admin.edit');
// Route::put('/admin/{product}', [ProductController::class, 'update'])->name('admin.update');
// Route::delete('/admin/{product}', [ProductController::class, 'destroy'])->name('admin.destroy');

// Route::get('/', [ProductController::class, 'indexpro'])->name('guest.index');
// Route::get('/', [BannerController::class, 'homebanner']);
Route::get('/', [HomeController::class, 'index'])->name('guest.index');
Route::get('/{product}', [ProductController::class, 'showpro'])->name('guest.show');
