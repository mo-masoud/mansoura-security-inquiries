<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {

        $officers = User::where('type', 'officer')->count();
        $users = User::where('type', 'user')->count();

        return view('dashboard', compact('officers', 'users'));
    }
}
