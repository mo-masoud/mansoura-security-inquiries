<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function index()
    {
        return view('enquiries.index');
    }

    public function create()
    {
        return view('enquiries.create');
    }
}
