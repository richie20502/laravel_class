<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});



Route::get('products/list', [ProductController::class, 'index'])->name('products.index');
Route::get('product/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products/guardar',[ProductController::class, 'store'])->name('products.store');
Route::post('products/update',[ProductController::class, 'update'])->name('products.update');



Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/products/{id}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');

