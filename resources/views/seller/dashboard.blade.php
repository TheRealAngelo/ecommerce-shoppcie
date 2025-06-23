@extends('layouts.main')

@section('title', 'Seller Dashboard - Shoppcie')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Seller Dashboard</h1>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card bg-theme-darker shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Your Products</h5>
                    <div class="display-4 mb-3 text-theme-orange">0</div>
                    <a href="#" class="btn btn-primary btn-sm">Manage Products</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card bg-theme-darker shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Orders</h5>
                    <div class="display-4 mb-3 text-theme-orange">0</div>
                    <a href="#" class="btn btn-primary btn-sm">View Orders</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card bg-theme-darker shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Sales</h5>
                    <div class="display-4 mb-3 text-theme-orange">$0</div>
                    <a href="#" class="btn btn-primary btn-sm">Sales Report</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection