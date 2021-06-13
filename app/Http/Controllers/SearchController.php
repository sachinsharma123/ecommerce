<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
public function search(){

    $products =Product::latest()->search(request(['search', 'category']))->get();
    
    return view('products',['products'=>$products]) ;

}
}
