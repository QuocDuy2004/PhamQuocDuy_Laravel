<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use User;

class UserController extends Controller
{
    public function index()
    {
        return view("user.index");
    }
    public function show()
    {
        return view("user.show");
    }
    public function edit($id)
    {
        return view("user.edit", ['userid' => $id]);
    }
    public function list($page = 1)
    {
       $list = User::all();
        return view("user.list", compact("title", "data"));
    }
}
