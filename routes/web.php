<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicioPage');
});

Route::get('/products', function () {
    return view('productsPage');
});
