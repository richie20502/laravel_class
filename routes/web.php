<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'home'])->name('raiz');

Route::get('/pag', [HomeController::class, 'home2'])->name('raiz');

Route::get('/products', [HomeController::class, 'home2'])->name('pag2');




Route::get('/search_products', [HomeController::class, 'search'])->name('products.searchs');










Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::get('products/{id}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');


Route::get('prueba/post', [ProductController::class, 'pruebaPost'])->name('products.destroy');



Route::get('postfind',[ProductController::class, 'postfind']);



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::middleware(['auth'])->group(function(){
    Route::get('products/list', [ProductController::class, 'index'])->name('products.index');
    Route::get('product/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('products/guardar',[ProductController::class, 'store'])->name('products.store');
    Route::post('/products/{id}/update',[ProductController::class, 'update'])->name('products.update');
    Route::get('/products/{id}/delete',[ProductController::class, 'destroy'])->name('products.delete');
});

Route::middleware(['validar_rol'])->group(function(){
    Route::get('pruebaadmin2', function(){
        dd('entra');
    });
});


Route::get('error/403', function(){
    return view('errors.403');
});
#
