<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PantiController;

Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('home');
Route::get('/catalog', [App\Http\Controllers\PageController::class, 'catalog'])->name('catalog');
Route::get('/panti', [App\Http\Controllers\PageController::class, 'panti'])->name('panti');
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.detail');
Route::get('/panti/{id}', [PantiController::class, 'show'])->name('panti.detail');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('/panti', function () {
    return view('panti');
})->name('panti');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/product/{id}', function ($id) {
    return view('product-detail');
})->name('product.detail');

Route::get('/panti/{id}', function ($id) {
    return view('panti-detail');
})->name('panti.detail');