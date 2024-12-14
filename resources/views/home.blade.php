@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <!-- Banner -->
    <div class="row">
        <div class="col-12">
            <div class="card bg-primary text-white text-center py-5">
                <div class="card-body">
                    <h1>Donate and Support Panti Asuhan</h1>
                    <p>Make a difference in children's lives</p>
                    <a href="{{ route('panti') }}" class="btn btn-light">Donate Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Products Section -->
    <div class="row mt-4">
        <div class="col-12">
            <h2 class="mb-3">Our Products</h2>
            <div class="row">
                <!-- Product Card (Repeat for multiple products) -->
                <div class="col-md-4 mb-4">
                    <div class="card card-hover">
                        <img src="/product1.jpg" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Product Name</h5>
                            <p class="card-text">Short product description</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Repeat product cards -->
            </div>
        </div>
    </div>

    <!-- Panti Section -->
    <div class="row mt-4">
        <div class="col-12">
            <h2 class="mb-3">Our Panti Asuhan</h2>
            <div class="row">
                <!-- Panti Card (Repeat for multiple panti) -->
                <div class="col-md-4 mb-4">
                    <div class="card card-hover">
                        <img src="/panti1.jpg" class="card-img-top" alt="Panti 1">
                        <div class="card-body">
                            <h5 class="card-title">Panti Name</h5>
                            <p class="card-text">Location and brief description</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- Repeat panti cards -->
            </div>
        </div>
    </div>
</div>
@endsection