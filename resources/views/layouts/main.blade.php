<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Shoppcie - Your Ultimate Shopping Destination')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-theme-dark text-theme-light">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-theme-darker">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span class="text-theme-orange fw-bold">Shoppcie</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'text-theme-orange' : '' }}" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark bg-theme-darker" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/category/prebuilt">Pre-built PCs</a></li>
                                <li><a class="dropdown-item" href="/category/parts">PC Parts</a></li>
                                <li><a class="dropdown-item" href="/category/peripherals">Peripherals</a></li>
                                <li><a class="dropdown-item" href="/category/accessories">Accessories</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('deals') ? 'text-theme-orange' : '' }}" href="{{ url('/deals') }}">Deals</a>
                        </li>
                    </ul>
                    <form class="d-flex me-2">
                        <div class="input-group">
                            <input class="form-control bg-theme-medium border-secondary text-theme-light" type="search" placeholder="Search products..." aria-label="Search">
                            <button class="btn btn-outline-secondary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                    
                    <!-- User dropdown with logout -->
                    <div class="ms-auto d-flex align-items-center">
                        @guest
                            <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                            @endif
                        @else
                            <div class="dropdown">
                                <button class="btn btn-outline-light dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark bg-theme-darker" aria-labelledby="userDropdown">
                                    @if(Auth::user()->role === 'admin')
                                        <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                                    @elseif(Auth::user()->role === 'seller')
                                        <li><a class="dropdown-item" href="{{ route('seller.dashboard') }}">Seller Dashboard</a></li>
                                    @endif
                                    <li><a class="dropdown-item" href="{{ route('account') }}">My Account</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}" class="mb-0">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            
                            <a href="{{ route('cart') }}" class="btn btn-outline-light ms-3 position-relative">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    0
                                </span>
                            </a>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
    <main>
        @yield('content')
    </main>
    
    <footer class="footer-theme py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="mb-3 text-theme-orange">Shoppcie</h5>
                    <p>Your ultimate shopping destination. Quality products at the best prices.</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-theme-light me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-theme-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-theme-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-theme-light"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <h5 class="mb-3 text-theme-orange">Shop</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-theme-light text-decoration-none">New Arrivals</a></li>
                        <li class="mb-2"><a href="#" class="text-theme-light text-decoration-none">Best Sellers</a></li>
                        <li class="mb-2"><a href="#" class="text-theme-light text-decoration-none">Deals & Promos</a></li>
                        <li><a href="#" class="text-theme-light text-decoration-none">Gift Cards</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <h5 class="mb-3 text-theme-orange">Support</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-theme-light text-decoration-none">Contact Us</a></li>
                        <li class="mb-2"><a href="#" class="text-theme-light text-decoration-none">FAQs</a></li>
                        <li class="mb-2"><a href="#" class="text-theme-light text-decoration-none">Shipping</a></li>
                        <li><a href="#" class="text-theme-light text-decoration-none">Returns</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="mb-3 text-theme-orange">Newsletter</h5>
                    <p>Subscribe to receive updates, access to exclusive deals, and more.</p>
                    <form class="mt-3">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control bg-dark border-secondary text-light" placeholder="Your email address" aria-label="Your email address">
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">© {{ date('Y') }} Shoppcie. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <img src="https://via.placeholder.com/200x30?text=Payment+Methods" alt="Payment Methods" class="img-fluid" style="max-height: 30px;">
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Make sure dropdowns work - Improved version -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize all dropdowns with Bootstrap's API to ensure they work
            var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
            var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
                return new bootstrap.Dropdown(dropdownToggleEl);
            });
            
            // Add manual click handler as fallback
            document.querySelectorAll('.dropdown-toggle').forEach(function(element) {
                element.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    var dropdownMenu = this.nextElementSibling;
                    if (dropdownMenu.classList.contains('show')) {
                        dropdownMenu.classList.remove('show');
                    } else {
                        dropdownMenu.classList.add('show');
                    }
                });
            });
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(event) {
                document.querySelectorAll('.dropdown-menu.show').forEach(function(dropdown) {
                    if (!dropdown.contains(event.target)) {
                        dropdown.classList.remove('show');
                    }
                });
            });
        });
    </script>
    
    <!-- Additional Scripts -->
    @yield('scripts')
</body>
</html>