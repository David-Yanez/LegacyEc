<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('inicioPage');;
    Route::get('products', 'products')->name('productsPage');;
    Route::get('product/{product:slug}', 'product')->name('productPage');
    Route::get('about', 'about')->name('aboutPage');
});