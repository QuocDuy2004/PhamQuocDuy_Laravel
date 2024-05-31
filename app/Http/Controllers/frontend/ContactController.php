<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contact(Request $request)
    {
        $data = Contact::where('status','!=',0)
        ->OrderBy('created_at','DESC')
        ->select('id','name','email','phone','title','content')
        ->get();
        return view('frontend.contact', compact('data'));
    }
}