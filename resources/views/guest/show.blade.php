@extends('layouts.user')

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

    <div class="container mt-4">
        <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">

            <div class="row">
                <div class="col-md-6">
                    <img src="{{ $product->img }}" class="img-fluid" alt="{{ $product->name }}">
                </div>
                <div class="col-md-6">
                    <h1>{{ $product->name }}</h1>
                    <p>Loại Sản Phẩm: <strong>{{ $category->name }}</strong></p>
                    <div class="form-group">
                        <label for="quantity">Số Lượng:</label>
                        <input type="number" id="quantity" name="quantity" class="form-control" value="1" min="1" max="{{ $product->quantity }}" onchange="updateTotal()">
                    </div>
                    <p>Giá Bán :
                        <del class="card-text">{{ number_format($product->old_price, 0, ',', '.') }}đ</del> /
                        <strong id="new-price" class="text-danger">{{ number_format($product->new_price, 0, ',', '.') }}đ</strong>
                        Giảm giá: <strong>{{ round($discountPercentage) }}%</strong>
                    </p>
                    <!-- <p>Khuyến mại đi kèm : {{ $promote->name }}</p> -->
                    <p>Mô Tả: </p>
                    <p>{{ $product->desc }}</p>

                    <div class="form-group">
                        <p id="total-price">Tổng Giá: {{ number_format($product->new_price, 0, ',', '.') }}đ</p>
                    </div>

                    <button type="submit" class="btn btn-danger">Thêm Giỏ Hàng</button>
                </div>
            </div>
        </form>
        <script>
            function updateTotal() {
                // Lấy giá mới và số lượng
                var newPrice = parseFloat(document.getElementById('new-price').innerText.replace(/\./g, '').replace('đ', ''));
                var quantity = parseInt(document.getElementById('quantity').value);

                // Tính toán tổng giá
                var totalPrice = newPrice * quantity;

                // Cập nhật giá tổng trên giao diện
                document.getElementById('total-price').innerText = 'Tổng Giá: ' + totalPrice.toLocaleString('vi-VN') + 'đ';
            }

            // Gọi hàm updateTotal khi trang được tải để đảm bảo giá tổng ban đầu được tính đúng
            window.onload = updateTotal;
        </script>

        <div class="row mt-4">
            <div class="col-12">
                <h3>Sản Phẩm Cùng Loại</h3>
            </div>
            @foreach ($relatedProducts as $relatedProduct)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $relatedProduct->img }}" class="card-img-top" alt="{{ $relatedProduct->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $relatedProduct->name }}</h5>
                        <p class="card-text">Giá Bán :
                            <del class="card-text">{{ number_format($relatedProduct->old_price, 0, ',', '.') }}đ</del> /
                            <strong class="text-danger">{{ number_format($relatedProduct->new_price, 0, ',', '.') }}đ</strong>
                        </p>
                        <p class="card-text">Số Lượng: {{ $relatedProduct->quantity }}</p>
                        <a href="" class="btn btn-danger">Thêm Giỏ Hàng</a>
                        <a href="{{ route('guest.show', $relatedProduct->id) }}" class="btn btn-primary">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection