<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contact(Request $request)
    {
        $data = Contact::get();
        return view('frontend.contact', compact('data'));
    }
}