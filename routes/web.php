<?php

use App\Http\Controllers\Backend;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\HomeController;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('products.index');
});

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get(RouteServiceProvider::HOME, [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resources([
        'profiles' => Backend\ProfileController::class,
        'brands' => Backend\BrandController::class,
        'categories' => Backend\CategoryController::class,
        'products' => Backend\ProductController::class,
    ]);
});

Route::resource('products', Frontend\ProductController::class, ['only' => ['index', 'show']]);

Route::get('carts', [Frontend\CartController::class, 'render'])->name('carts.render');
Route::post('carts', [Frontend\CartController::class, 'store'])->name('carts.store');
