<div class="card bg-theme-darker border-secondary mb-4">
    <div class="card-body">
        <h5 class="mb-3 text-theme-orange">Categories</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item border-secondary bg-theme-darker ps-0">
                <a href="{{ url('/category/electronics') }}" class="text-decoration-none text-theme-light">Electronics</a>
            </li>
            <li class="list-group-item border-secondary bg-theme-darker ps-0">
                <a href="{{ url('/category/fashion') }}" class="text-decoration-none text-theme-light">Fashion</a>
            </li>
            <li class="list-group-item border-secondary bg-theme-darker ps-0">
                <a href="{{ url('/category/home-kitchen') }}" class="text-decoration-none text-theme-light">Home & Kitchen</a>
            </li>
            <li class="list-group-item border-secondary bg-theme-darker ps-0">
                <a href="{{ url('/category/beauty') }}" class="text-decoration-none text-theme-light">Beauty & Personal Care</a>
            </li>
            <li class="list-group-item border-secondary bg-theme-darker ps-0">
                <a href="{{ url('/category/sports') }}" class="text-decoration-none text-theme-light">Sports & Outdoors</a>
            </li>
        </ul>
    </div>
</div>

<div class="card bg-theme-darker border-secondary mb-4">
    <div class="card-body">
        <h5 class="mb-3 text-theme-orange">Filter by Price</h5>
        <div class="range-slider">
            <input type="range" class="form-range" min="0" max="1000" id="priceRange">
            <div class="d-flex justify-content-between mt-2 text-theme-light">
                <span>$0</span>
                <span>$1000</span>
            </div>
            <div class="mt-3">
                <button class="btn btn-primary w-100">Apply Filter</button>
            </div>
        </div>
    </div>
</div>

<div class="card bg-theme-darker border-secondary">
    <div class="card-body">
        <h5 class="mb-3 text-theme-orange">Customer Ratings</h5>
        <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="" id="rating5">
            <label class="form-check-label text-theme-light" for="rating5">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
            </label>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="" id="rating4">
            <label class="form-check-label text-theme-light" for="rating4">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                & Up
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="rating3">
            <label class="form-check-label text-theme-light" for="rating3">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                & Up
            </label>
        </div>
    </div>
</div>