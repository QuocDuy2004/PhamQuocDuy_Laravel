<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        $userCount = User::where('status', '!=', 0)->count();
        $productCount = Product::where('status', '!=', 0)->count();
        
        return view('backend.dashboard.index', compact('userCount', 'productCount')); 
    }

    public function Config()
    {
        
        return view('backend.dashboard.index', compact('userCount', 'productCount')); 
    }
}
