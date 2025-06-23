@extends('layouts.main')

@section('title', 'My Account - Shoppcie')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">My Account</h1>
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card bg-theme-darker shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-4">Account Navigation</h5>
                    <div class="list-group list-group-flush bg-transparent">
                        <a href="{{ url('/account') }}" class="list-group-item list-group-item-action bg-transparent text-theme-light active">Account Dashboard</a>
                        <a href="{{ url('/account/orders') }}" class="list-group-item list-group-item-action bg-transparent text-theme-light">My Orders</a>
                        <a href="{{ url('/account/wishlist') }}" class="list-group-item list-group-item-action bg-transparent text-theme-light">Wishlist</a>
                        <a href="{{ url('/account/addresses') }}" class="list-group-item list-group-item-action bg-transparent text-theme-light">Address Book</a>
                        <a href="{{ url('/account/settings') }}" class="list-group-item list-group-item-action bg-transparent text-theme-light">Account Settings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card bg-theme-darker shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Account Information</h5>
                    <hr class="border-secondary">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <p class="mb-1 text-muted">Name:</p>
                            <p class="mb-3">{{ Auth::user()->name }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <p class="mb-1 text-muted">Email:</p>
                            <p class="mb-0">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card bg-theme-darker shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Recent Orders</h5>
                    <hr class="border-secondary">
                    <div class="text-center py-4">
                        <p>You haven't placed any orders yet.</p>
                        <a href="/" class="btn btn-primary">Start Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection