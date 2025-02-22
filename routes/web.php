<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PurchesController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\Website\ProductController as WebsiteProductController;

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



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//............. admin route............

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/getsubcat/{id}', [SubcategoryController::class, 'getSubcat']);


Route::resources([
    'category' => CategoryController::class,
    'subcategory' => SubcategoryController::class,
    'product' => ProductController::class,
    'order' => OrderController::class, 
    'supplier' => SupplierController::class,
    'purches' => PurchesController::class,
]);
//............. website route...........


Route::get('/', [HomeController::class,'index']);
Route::get('/homesubcat/{id}', [HomeController::class,'homesubcat'])->name('homesubcat');


Route::get('/cart/{id}', [HomeController::class,'cart']);
Route::get('/searchbox', [PurchesController::class, 'searchr']);



 
require __DIR__.'/auth.php';
