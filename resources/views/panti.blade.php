@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <h1>Panti Asuhan</h1>
            
            <!-- Search Bar -->
            <div class="mb-4">
                <input type="text" class="form-control" placeholder="Search panti...">
            </div>

            <!-- Panti Grid -->
            <div class="row">
                <!-- Panti Card (Repeat for multiple panti) -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/panti.jpg" class="card-img-top" alt="Panti">
                        <div class="card-body">
                            <h5 class="card-title">Panti Name</h5>
                            <p class="card-text">Location: Jakarta</p>
                            <a href="{{ route('panti.detail', 1) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- More panti cards -->
            </div>
        </div>
    </div>
</div>
@endsection
