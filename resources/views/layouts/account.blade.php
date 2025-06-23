@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-3 mb-4 mb-lg-0">
            <div class="card bg-theme-darker border-secondary">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <div class="avatar-circle mb-3 bg-primary">
                            <span class="initials">{{ substr(Auth::user()->name ?? 'U', 0, 1) }}</span>
                        </div>
                        <h5 class="mb-0 text-theme-light">{{ Auth::user()->name ?? 'User' }}</h5>
                        <p class="text-muted small">{{ Auth::user()->email ?? 'user@example.com' }}</p>
                    </div>
                    <hr class="border-secondary">
                    <div class="account-nav">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('account') ? 'text-theme-orange' : 'text-theme-light' }}" href="{{ url('/account') }}">
                                    <i class="fas fa-user me-2"></i> Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('account/orders*') ? 'text-theme-orange' : 'text-theme-light' }}" href="{{ url('/account/orders') }}">
                                    <i class="fas fa-shopping-bag me-2"></i> My Orders
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('account/wishlist') ? 'text-theme-orange' : 'text-theme-light' }}" href="{{ url('/account/wishlist') }}">
                                    <i class="fas fa-heart me-2"></i> Wishlist
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('account/addresses') ? 'text-theme-orange' : 'text-theme-light' }}" href="{{ url('/account/addresses') }}">
                                    <i class="fas fa-map-marker-alt me-2"></i> Addresses
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('account/settings') ? 'text-theme-orange' : 'text-theme-light' }}" href="{{ url('/account/settings') }}">
                                    <i class="fas fa-cog me-2"></i> Account Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="nav-link text-danger border-0 bg-transparent w-100 text-start">
                                        <i class="fas fa-sign-out-alt me-2"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card bg-theme-darker border-secondary">
                <div class="card-body">
                    <h4 class="mb-4 text-theme-orange">@yield('account-title', 'My Account')</h4>
                    @yield('account-content')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .avatar-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }
    
    .initials {
        font-size: 30px;
        font-weight: bold;
    }
    
    .account-nav .nav-link {
        padding: 0.5rem 0;
    }
    
    .account-nav .nav-link.active {
        font-weight: 500;
    }
</style>
@endsection