<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
        return view('inicioPage');
    }
    public function products(){
         // Consulta 
    
        $products = Product::get();


    return view('productsPage', ['productsDescription' => $products]);

    }
    public function product(Product $product){
      
        return view('productPage', ['product' => $product]);
    }

    public function about(){
        return view('aboutPage');
    }
}
