<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Product(){
        $data = Product::where('status','!=',0)
        ->OrderBy('created_at','DESC')
        ->select('id','image','name','slug','price','pricesale')
        ->get();
        return view('frontend.product',compact('data'));
    }
}
