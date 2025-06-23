@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="checkout-steps mb-4">
                        <div class="d-flex justify-content-between">
                            <div class="step {{ request()->is('checkout/shipping') ? 'active' : (request()->is('checkout/payment') || request()->is('checkout/review') ? 'completed' : '') }}">
                                <div class="step-icon">1</div>
                                <div class="step-text">Shipping</div>
                            </div>
                            <div class="step-connector"></div>
                            <div class="step {{ request()->is('checkout/payment') ? 'active' : (request()->is('checkout/review') ? 'completed' : '') }}">
                                <div class="step-icon">2</div>
                                <div class="step-text">Payment</div>
                            </div>
                            <div class="step-connector"></div>
                            <div class="step {{ request()->is('checkout/review') ? 'active' : '' }}">
                                <div class="step-icon">3</div>
                                <div class="step-text">Review</div>
                            </div>
                        </div>
                    </div>
                    
                    @yield('checkout-content')
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-4">Order Summary</h5>
                    <div class="summary-items">
                        <!-- This will be populated dynamically with items -->
                        @yield('order-summary')
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal</span>
                        <span>$@yield('subtotal', '0.00')</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Shipping</span>
                        <span>$@yield('shipping', '0.00')</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Tax</span>
                        <span>$@yield('tax', '0.00')</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-3">
                        <strong>Total</strong>
                        <strong>$@yield('total', '0.00')</strong>
                    </div>
                    <div class="promo-code mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <button class="btn btn-outline-secondary" type="button">Apply</button>
                        </div>
                    </div>
                    @yield('checkout-action')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .checkout-steps {
        position: relative;
    }
    .step {
        text-align: center;
        z-index: 1;
    }
    .step-icon {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: #e9ecef;
        color: #6c757d;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 8px;
        font-weight: bold;
    }
    .step.active .step-icon {
        background-color: #0d6efd;
        color: white;
    }
    .step.completed .step-icon {
        background-color: #198754;
        color: white;
    }
    .step-connector {
        flex-grow: 1;
        height: 2px;
        background-color: #e9ecef;
        margin-top: 15px;
    }
    .summary-items {
        max-height: 300px;
        overflow-y: auto;
    }
</style>
@endsection