<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController
{
    public function index()
    {
        // Ensure this isn't redirecting regular users
        $user = Auth::user();
        
        if ($user && $user->role == 'admin') {
            return redirect('/admin/dashboard');
        } elseif ($user && $user->role == 'seller') {
            return redirect('/seller/dashboard');
        } else {
            return view('pages.homepage'); // Just show the homepage
        }
    }
}