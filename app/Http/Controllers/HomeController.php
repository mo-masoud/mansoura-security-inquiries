<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {

        $officers = User::where('type', 'officer')->count();
        $users = User::where('type', 'employee')->count();

        $enquiries = Enquiry::query();

        // if (auth()->user()->type == 'employee') {
        //     $enquiries->where('user_id', auth()->id());
        // }

        $enquiries = $enquiries->count();


        $todayEnquiries = Enquiry::query();

        // if (auth()->user()->type == 'employee') {
        //     $todayEnquiries->where('user_id', auth()->id());
        // }

        $todayEnquiries = $todayEnquiries
            ->whereDate('created_at', now()->today())
            ->count();

        return view('dashboard', compact('officers', 'users', 'enquiries', 'todayEnquiries'));
    }
}
