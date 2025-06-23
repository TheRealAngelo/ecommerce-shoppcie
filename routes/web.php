<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

// Home page route - point to your homepage
Route::get('/', function () {
    // If admin or seller is logged in, redirect to their dashboard
    if (Auth::check()) {
        $user = Auth::user();
        if (isset($user->role) && $user->role === 'admin') {
            return redirect('/admin/dashboard');
        } elseif (isset($user->role) && $user->role === 'seller') {
            return redirect('/seller/dashboard');
        }
        // Regular customers should see the homepage, so no redirect
    }
    
    return view('pages.homepage');
})->name('home');

// Regular homepage that will be accessible to logged-in customers
Route::get('/home', function () {
    return view('pages.homepage');
})->name('customer.home');

// Authentication routes
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    // Registration routes if needed
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    
    // User account route
    Route::get('/account', function () {
        // Debug output - log the referring URL and session data
        Log::info('Account page accessed', [
            'user_id' => Auth::id() ?? 'guest',
            'referring_url' => request()->headers->get('referer'),
            'intended_url' => session()->get('url.intended', 'No intended URL'),
        ]);
        
        // Regular account view
        return view('pages.account');
    })->name('account');
    
    // Admin routes
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', function () {
            if (Auth::user()->role !== 'admin') {
                abort(403, 'Unauthorized action.');
            }
            return view('admin.dashboard');
        })->name('admin.dashboard');
    });

    // Customer routes
    Route::prefix('customer')->group(function () {
        Route::get('/dashboard', function () {
            if (Auth::user()->role !== 'customer') {
                abort(403, 'Unauthorized action.');
            }
            return view('pages.homepage');
        })->name('customer.homepage');
    });
    
    // Seller routes
    Route::prefix('seller')->group(function () {
        Route::get('/dashboard', function () {
            if (Auth::user()->role !== 'seller') {
                abort(403, 'Unauthorized action.');
            }
            return view('seller.dashboard');
        })->name('seller.dashboard');
    });
    
    Route::get('/checkout', function () {
        return view('pages.checkout');
    })->name('checkout');
});

// Product and category routes
Route::get('/category/{slug?}', function ($slug = null) {
    return view('pages.category', ['slug' => $slug]);
})->name('category');

Route::get('/product/{slug}', function ($slug) {
    return view('pages.product', ['slug' => $slug]);
})->name('product');

// Cart route
Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');

// Include Laravel's default auth routes
require __DIR__.'/auth.php';
