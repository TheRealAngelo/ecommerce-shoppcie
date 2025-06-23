
@extends('layouts.main')

@section('content')
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            @yield('breadcrumbs')
        </ol>
    </nav>
    
    <div class="row">
        <div class="col-lg-3 mb-4 mb-lg-0">
            @include('partials.product-sidebar')
        </div>
        <div class="col-lg-9">
            @yield('product-content')
        </div>
    </div>
</div>
@endsection