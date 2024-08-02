@extends('layouts.user')

@section('content')
<div class="">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Filters -->
    <div class="container mt-4">
    <form method="GET" action="{{ route('guest.index') }}" class="row g-3 p-3 border rounded bg-light shadow-sm">
    <div class="col-md-4">
        <label for="category_id" class="form-label">Category</label>
        <select class="form-select" id="category_id" name="category_id">
            <option value="">Choose...</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-4">
        <label for="min_price" class="form-label">Min Price</label>
        <input type="number" class="form-control" id="min_price" name="min_price" placeholder="Enter min price" value="{{ request('min_price') }}">
    </div>

    <div class="col-md-4">
        <label for="max_price" class="form-label">Max Price</label>
        <input type="number" class="form-control" id="max_price" name="max_price" placeholder="Enter max price" value="{{ request('max_price') }}">
    </div>

    <div class="col-md-6">
        <label for="min_quantity" class="form-label">Min Quantity</label>
        <input type="number" class="form-control" id="min_quantity" name="min_quantity" placeholder="Enter min quantity" value="{{ request('min_quantity') }}">
    </div>

    <div class="col-md-6 d-flex align-items-end">
        <button type="submit" class="btn btn-primary w-100">Apply Filters</button>
    </div>
</form>

    </div>

    <!-- Hot Products -->
    <div class="container mt-4">
        <h2 class="text-center">Hot Products</h2>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card">
                    @php
                    $imgUrl = filter_var($product->img, FILTER_VALIDATE_URL) ? $product->img : Storage::url($product->img);
                    @endphp
                    <img src="{{ $imgUrl }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Giá Bán :
                            <del class="card-text">{{ number_format($product->old_price, 0, ',', '.') }}đ</del> /
                            <strong class="text-danger">{{ number_format($product->new_price, 0, ',', '.') }}đ</strong>
                        </p>
                        <p class="card-text">Số Lượng: {{ $product->quantity }}</p>
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
</div>
@endsection
