<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Page2Controller;

Route::get('/slide', [PageController::class, 'getIndex']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/productsmockAPI', [ProductController::class, 'index'])->name('products.index');
Route::get('/baitap4', [PageController::class, 'index']);
Route::get('/catLayout', [Page2Controller::class, 'index2']);

Route::get('/products', [ProductController::class, 'productEloquent']);