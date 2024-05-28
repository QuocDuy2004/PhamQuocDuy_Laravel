<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.menu.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('backend.menu.store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('backend.menu.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.menu.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view('backend.menu.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('backend.menu.destroy');
    }
}
