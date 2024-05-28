<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.brand.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('backend.brand.store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('backend.brand.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.brand.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view('backend.brand.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('backend.brand.destroy');
    }
}
