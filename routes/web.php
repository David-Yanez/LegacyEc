<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('inicioPage');
})->name('inicioPage');

Route::get('/products', function () {

})->name('productsPage');

Route::get('/product/{slug}', function ($slug) {
    $product = $slug;
    return view('productPage', ['product' => $product]);
})->name('productPage');

Route::get('/about', function () {
    return view('aboutPage');
})->name('aboutPage');*/

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('inicioPage');;
    Route::get('products', 'products')->name('productsPage');;
    Route::get('product/{post:slug}', 'product')->name('productPage');
    Route::get('about', 'about')->name('aboutPage');
});