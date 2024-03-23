<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('officers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('officers.create');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('officers.update', compact('id'));
    }
}
