@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <h1>Product Catalog</h1>
            
            <!-- Search Bar -->
            <div class="mb-4">
                <input type="text" class="form-control" placeholder="Search products...">
            </div>

            <!-- Product Grid -->
            <div class="row">
                <!-- Product Card (Repeat for multiple products) -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="/product.jpg" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h5 class="card-title">Product Name</h5>
                            <p class="card-text">Price: Rp 50,000</p>
                            <a href="{{ route('product.detail', 1) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- More product cards -->
            </div>
        </div>
    </div>
</div>
@endsection