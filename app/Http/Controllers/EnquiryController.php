<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
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

    public function preparing(Enquiry $enquiry)
    {
        $url = route('enquiries.print', $enquiry);
        return view('enquiries.preparing', compact('url'));
    }

    public function print(Enquiry $enquiry)
    {
        return view('enquiries.print', compact('enquiry'));
    }
}
