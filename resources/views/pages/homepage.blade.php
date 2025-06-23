
@extends('layouts.main')

@section('title', 'Shoppcie - Your Ultimate Shopping Destination')

@section('content')
<div class="container py-5">
    <!-- Hero Banner -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="bg-theme-darker border border-secondary p-5 rounded">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="text-theme-orange">Welcome to Shoppcie</h1>
                        <p class="lead text-theme-light">Your one-stop destination for quality products at amazing prices.</p>
                        <a href="/category" class="btn btn-primary">Shop Now</a>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <img src="https://via.placeholder.com/600x300" alt="Shop now" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Featured Categories -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="mb-4 text-theme-orange">Shop by Category</h2>
        </div>
        <div class="col-6 col-md-3 mb-4">
            <div class="card h-100 bg-theme-darker border-secondary">
                <img src="https://via.placeholder.com/300x300?text=Electronics" class="card-img-top" alt="prebuilt">
                <div class="card-body text-center">
                    <h5 class="card-title text-theme-light">Pre - Built</h5>
                    <a href="#" class="btn btn-outline-primary">Browse</a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 mb-4">
            <div class="card h-100 bg-theme-darker border-secondary">
                <img src="https://via.placeholder.com/300x300?text=Fashion" class="card-img-top" alt="PC Parts">
                <div class="card-body text-center">
                    <h5 class="card-title text-theme-light">PC Parts</h5>
                    <a href="#" class="btn btn-outline-primary">Browse</a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 mb-4">
            <div class="card h-100 bg-theme-darker border-secondary">
                <img src="https://via.placeholder.com/300x300?text=Home" class="card-img-top" alt="Peripherals">
                <div class="card-body text-center">
                    <h5 class="card-title text-theme-light">Peripherals</h5>
                    <a href="#" class="btn btn-outline-primary">Browse</a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 mb-4">
            <div class="card h-100 bg-theme-darker border-secondary">
                <img src="https://via.placeholder.com/300x300?text=Beauty" class="card-img-top" alt="Others">
                <div class="card-body text-center">
                    <h5 class="card-title text-theme-light">Others</h5>
                    <a href="#" class="btn btn-outline-primary">Browse</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Featured Products -->
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="mb-4 text-theme-orange">Featured Products</h2>
        </div>
        @for ($i = 1; $i <= 4; $i++)
        <div class="col-6 col-md-3 mb-4">
            <div class="card h-100 bg-theme-darker border-secondary">
                <span class="badge bg-danger position-absolute top-0 end-0 m-2">Sale</span>
                <img src="https://via.placeholder.com/300x300?text=Product+{{ $i }}" class="card-img-top" alt="Product {{ $i }}">
                <div class="card-body">
                    <h5 class="card-title text-theme-light">Product Name {{ $i }}</h5>
                    <div class="mb-2">
                        <span class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                        <small class="text-muted ms-1">(24)</small>
                    </div>
                    <div class="mb-2">
                        <span class="text-theme-orange fw-bold me-2">${{ 19.99 * $i }}</span>
                        <span class="text-muted text-decoration-line-through">${{ 24.99 * $i }}</span>
                    </div>
                    <button class="btn btn-primary btn-sm"><i class="fas fa-shopping-cart me-1"></i> Add to Cart</button>
                </div>
            </div>
        </div>
        @endfor
    </div>
    
    <!-- Deal of the Day -->
    <div class="row my-5">
        <div class="col-12">
            <div class="card bg-theme-darker border-secondary">
                <div class="card-body p-0">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="https://via.placeholder.com/600x400?text=Deal+of+the+Day" class="img-fluid rounded-start" alt="Deal of the Day">
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-center p-4">
                            <div class="mb-2">
                                <span class="badge bg-danger">Deal of the Day</span>
                            </div>
                            <h3 class="card-title text-theme-orange">Special Offer Today!</h3>
                            <p class="card-text text-theme-light">Get this amazing product at an unbeatable price. Limited time offer, don't miss out!</p>
                            <div class="mb-3">
                                <span class="display-6 text-theme-orange">$199.99</span>
                                <span class="text-muted text-decoration-line-through ms-2">$299.99</span>
                                <span class="badge bg-success ms-2">33% OFF</span>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary">Shop Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection