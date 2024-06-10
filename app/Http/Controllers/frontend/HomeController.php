<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        // $list = DB::table('menu')->get();
        return view('frontend.home');
    }
}
