<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductDetailController extends Controller
{
    public function ProductDetail($slug){
        
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('frontend.productdetail', compact('product'));
    }
}
