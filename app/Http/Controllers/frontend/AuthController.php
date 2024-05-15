<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Login()
    {
        return view('login');
    }
    public function Register()
    {
        return view('register');
    }
    public function Forgot()
    {
        return view('forgot');
    }
}
