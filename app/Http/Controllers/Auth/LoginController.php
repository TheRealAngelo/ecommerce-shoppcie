<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle a login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            // Get the authenticated user
            $user = Auth::user();
            
            // Debug logging
            Log::info('User logged in', [
                'user_id' => $user->id,
                'role' => $user->role,
                'intended_url' => session()->get('url.intended', 'No intended URL'),
            ]);
            
            // Force clear any intended URL that might be causing the redirect
            session()->forget('url.intended');
            
            // Check the user's role and redirect accordingly with no intended URL
            if ($user->role == 'admin') {
                return redirect('/admin/dashboard');
            } elseif ($user->role == 'seller') {
                return redirect('/seller/dashboard');
            } else {
                // Force redirect to homepage with NO intended URL
                return redirect('/');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Log the user out.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}