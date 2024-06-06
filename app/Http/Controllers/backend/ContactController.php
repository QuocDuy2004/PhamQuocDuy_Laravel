<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Providers\ViewServiceProvider;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Contact::where("status", "!=", 0)
        ->orderBy("created_at", "DESC")
        ->select('id','name','phone','email', 'content', 'created_at','status')
        ->paginate(7);
        return view('backend.contact.index',compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('backend.contact.store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('backend.contact.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.contact.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view('backend.contact.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('backend.contact.destroy');
    }
}
