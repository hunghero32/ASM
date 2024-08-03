@extends('layouts.demo')

@section('content')
<div class="">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @php
    $category = App\Models\Category::find($product->category_id);
    $promote = App\Models\Promote::find($product->category_id);
    $relatedProducts = App\Models\Product::where('category_id', $product->category_id)
    ->where('id', '!=', $product->id)
    ->get();
    $discountPercentage = (($product->old_price - $product->new_price) / $product->old_price) * 100;
    @endphp
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Shop Detail</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Shop Detail</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Single Product Start -->
    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <div class="row g-4 mb-5">
                <div class="col-lg-8 col-xl-9">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="border rounded">
                                @php
                                $imgUrl = filter_var($product->img, FILTER_VALIDATE_URL) ? $product->img : Storage::url($product->img);
                                @endphp
                                <a href="{{ $imgUrl }}">
                                    <img src="{{ $imgUrl }}" class="img-fluid rounded" alt="{{ $product->name }}">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <h4 class="fw-bold mb-3">{{ $product->name }}</h4>
                                <p class="mb-3">Loại Sản Phẩm: <strong>{{ $category->name }}</strong></p>
                                <p class="fw-bold mb-3">
                                    <del class="card-text">{{ number_format($product->old_price, 0, ',', '.') }}đ</del> /
                                    <strong id="new-price" class="text-danger">{{ number_format($product->new_price, 0, ',', '.') }}đ</strong>
                                    - Giảm giá: <strong>{{ round($discountPercentage) }}%</strong>
                                </p>
                                <p class="mb-4">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p>
                                <p class="mb-4">Susp endisse ultricies nisi vel quam suscipit. Sabertooth peacock flounder; chain pickerel hatchetfish, pencilfish snailfish</p>
                                <div class="form-group mb-4">
                                    <label for="quantity" class="form-label">Số Lượng:</label>
                                    <div class="input-group" style="width: 30%;">
                                        <button class="btn btn-outline-secondary" type="button" onclick="decreaseQuantity()">-</button>
                                        <input type="number" id="quantity" name="quantity" class="form-control text-center" value="1" min="1" max="{{ $product->quantity }}" onchange="updateTotal()">
                                        <button class="btn btn-outline-secondary" type="button" onclick="increaseQuantity()">+</button>
                                    </div>
                                </div>
                                <p id="total-price" class="fw-bold">Tổng Giá: {{ number_format($product->new_price, 0, ',', '.') }}đ</p>
                                <script>
                                    function updateTotal() {
                                        var quantityInput = document.getElementById('quantity');
                                        var currentQuantity = parseInt(quantityInput.value);
                                        var newPriceText = document.getElementById('new-price').innerText;
                                        var newPrice = parseInt(newPriceText.replace(/[^\d]/g, '')); // Chuyển đổi giá từ chuỗi sang số

                                        var totalPrice = currentQuantity * newPrice;

                                        document.getElementById('total-price').innerHTML = 'Tổng Giá: ' + totalPrice.toLocaleString('vi-VN') + 'đ';
                                    }

                                    function increaseQuantity() {
                                        var quantityInput = document.getElementById('quantity');
                                        var currentValue = parseInt(quantityInput.value);
                                        var maxQuantity = parseInt(quantityInput.max);

                                        if (currentValue < maxQuantity) {
                                            quantityInput.value = currentValue + 1;
                                            updateTotal();
                                        }
                                    }

                                    function decreaseQuantity() {
                                        var quantityInput = document.getElementById('quantity');
                                        var currentValue = parseInt(quantityInput.value);

                                        if (currentValue > 1) {
                                            quantityInput.value = currentValue - 1;
                                            updateTotal();
                                        }
                                    }
                                </script>
                                <button type="submit" class="btn btn-primary rounded-pill">Thêm Giỏ Hàng</button>
                            </form>
                        </div>
                        <div class="col-lg-12">
                            <nav>
                                <div class="nav nav-tabs mb-3">
                                    <button class="nav-link active border-white border-bottom-0" type="button" role="tab" id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about" aria-controls="nav-about" aria-selected="true">Description</button>
                                </div>
                            </nav>
                            <div class="tab-content mb-5">
                                <div class="tab-pane active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                    <p>{{ $product->desc }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="row g-4 fruite">
                        <div class="col-lg-12">
                            <div class="input-group w-100 mx-auto d-flex mb-4">
                                <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                                <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                            </div>
                            <div class="mb-4">
                                <h4>Categories</h4>
                                <ul class="list-unstyled fruite-categorie">
                                    <li>
                                        <div class="d-flex justify-content-between fruite-name">
                                            <a href="#"><i class="far fa-check-circle"></i><strong>{{ $category->name }}</strong></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="fw-bold mb-0">Related products</h1>
            <div class="vesitable">
                <div class="owl-carousel vegetable-carousel justify-content-center">
                    @foreach ($relatedProducts as $relatedProduct)
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            @php
                            $imgUrl = filter_var($relatedProduct->img, FILTER_VALIDATE_URL) ? $relatedProduct->img : Storage::url($relatedProduct->img);
                            @endphp
                            <a href="{{ $imgUrl }}">
                                <img src="{{ $imgUrl }}" class="img-fluid rounded" alt="{{ $relatedProduct->name }}">
                            </a>
                        </div>
                        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">
                            {{ $relatedProduct->name }}
                        </div>
                        <div class="p-4 pb-0 rounded-bottom">
                            <h4>{{ $relatedProduct->name }}</h4>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold">
                                    <del class="text-muted">{{ number_format($relatedProduct->old_price, 0, ',', '.') }}đ</del> /
                                    <strong class="text-danger">{{ number_format($relatedProduct->new_price, 0, ',', '.') }}đ</strong>
                                </p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary">
                                    <i class="fa fa-shopping-bag me-2 text-primary"></i>
                                </a>
                                <a href="{{ route('guest.show', $relatedProduct->id) }}" class="btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary">
                                    <i class="fa fa-info-circle me-2 text-primary"></i>Chi Tiết
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <!-- Single Product End -->

    @endsection