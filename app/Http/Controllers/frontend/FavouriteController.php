<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    public function Favourite()
    {
        $favourite = Auth('customer')->user()->favourite ? Auth('customer')->user()->favourite : [];
        return view('frontend.favourite',compact('favourite'));
    }
}
