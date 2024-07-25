@extends('layouts.user')

@section('content')
<div class="">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner w-2000 h-800">
            <div class="carousel-item active">
                <img src="slide1.jpg" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="slide2.jpg" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="slide3.jpg" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Hot Products -->
    <div class="container mt-4">
        <h2 class="text-center">Hot Products</h2>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $product->img }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Giá Bán :
                            <del class="card-text">{{ number_format($product->old_price, 0, ',', '.') }}đ</del> /
                            <strong class="text-danger">{{ number_format($product->new_price, 0, ',', '.') }}đ</strong>
                        </p>
                        <p class="card-text">Số Lượng: {{ $product->quantity }}</p>
                        <!-- <a href="" class="btn btn-danger">Thêm Giỏ Hàng</a> -->
                        <div class="d-flex justify-content-between">
                            <form action="{{ route('cart.add') }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="btn btn-danger">Thêm vào giỏ hàng</button>
                            </form>
                            <a href="{{ route('guest.show', $product->id) }}" class="btn btn-primary">Xem Chi Tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Policies -->
    <div class="container mt-4">
        <h2 class="text-center">Our Policies</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Free Shipping</h5>
                        <p class="card-text">Enjoy free shipping on all orders over $50.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">30 Days Return</h5>
                        <p class="card-text">Return products within 30 days for a full refund.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">24/7 Support</h5>
                        <p class="card-text">Our support team is here to help you 24/7.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>&copy; 2024 My Shop. All rights reserved.</p>
    </footer>
    @endsection