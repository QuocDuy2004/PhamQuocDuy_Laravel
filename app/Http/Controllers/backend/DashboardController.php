<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        $hello = User::first();
        return view('backend.dashboard.index',compact('hello')); 
    }
}
