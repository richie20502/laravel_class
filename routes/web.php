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

Route::prefix('products_dos')->group(function(){

    Route::get('list',[ProductController::class, 'index'])
->name('product.index_2');

Route::get('create',[ProductController::class, 'create'])
->name('product.create_2');


});



Route::get('product/list',[ProductController::class, 'index'])
->name('product.index');

Route::get('product/create',[ProductController::class, 'create'])->name('product.create');
