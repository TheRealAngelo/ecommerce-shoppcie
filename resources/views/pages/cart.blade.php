<?php
@extends('layouts.main')

@section('title', 'Shopping Cart - Shoppcie')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Your Shopping Cart</h1>
    
    <div class="row">
        <div class="col-lg-8">
            <div class="card bg-theme-darker shadow-sm mb-4">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-dark table-hover mb-0">
                            <thead>
                                <tr>
                                    <th class="border-0">Product</th>
                                    <th class="border-0">Price</th>
                                    <th class="border-0">Quantity</th>
                                    <th class="border-0">Total</th>
                                    <th class="border-0"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- This will be populated dynamically in the future -->
                                <tr>
                                    <td colspan="5" class="text-center py-4">Your cart is empty</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('home') }}" class="btn btn-outline-light">
                    <i class="fas fa-arrow-left me-2"></i>Continue Shopping
                </a>
                <button class="btn btn-outline-light">
                    <i class="fas fa-sync-alt me-2"></i>Update Cart
                </button>
            </div>
        </div>
        
        <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="card bg-theme-darker shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-4">Order Summary</h5>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal</span>
                        <span>$0.00</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Shipping</span>
                        <span>$0.00</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Tax</span>
                        <span>$0.00</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-4">
                        <strong>Total</strong>
                        <strong>$0.00</strong>
                    </div>
                    <a href="{{ route('checkout') }}" class="btn btn-primary w-100">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection