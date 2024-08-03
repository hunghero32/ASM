@extends('layouts.demo')

@section('content')
<div class="">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Giỏ Hàng</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
            <li class="breadcrumb-item"><a href="#">Trang</a></li>
            <li class="breadcrumb-item active text-white">Giỏ Hàng</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Cart Page Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            @if($cartItems->isEmpty())
            <p class="text-center">Giỏ hàng của bạn đang trống.</p>
            @else
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Tổng</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody id="cart-items">
                        @foreach($cartItems as $item)
                        @php
                        $product = $item->product;
                        $total = $product->new_price * $item->quantity;
                        $imgUrl = filter_var($product->img, FILTER_VALIDATE_URL) ? $product->img : Storage::url($product->img);
                        @endphp
                        <tr data-price="{{ $product->new_price }}" data-quantity="{{ $item->quantity }}">
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ $imgUrl }}" class="img-fluid me-3 rounded-circle" style="width: 80px; height: 80px;" alt="{{ $product->name }}">
                                </div>
                            </td>
                            <td>
                                <p class="mb-0">{{ $product->name }}</p>
                            </td>
                            <td>
                                <p class="mb-0">{{ $item->quantity }}</p>
                            </td>
                            <td>
                                <p class="mb-0">{{ number_format($product->new_price, 0, ',', '.') }} đ</p>
                            </td>
                            <td class="item-total">
                                <p class="mb-0">{{ number_format($total, 0, ',', '.') }} đ</p>
                            </td>
                            <td>
                                <form action="{{ route('cart.remove', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-md rounded-circle bg-light border">
                                        <i class="fa fa-times text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mb-4">
                <h5>Tổng Thanh Toán: <span id="total-price">{{ number_format($totalPrice ?? 0, 0, ',', '.') }} đ</span></h5>
            </div>

            <form action="{{ route('cart.checkout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success">Thanh toán COD</button>
            </form>
            @endif
        </div>
    </div>
    <!-- Cart Page End -->
</div>

<script>
    function updateTotalPrice() {
        let totalPrice = 0;

        document.querySelectorAll('#cart-items tr').forEach(row => {
            const price = parseFloat(row.dataset.price);
            const quantity = parseInt(row.dataset.quantity);
            const itemTotal = price * quantity;

            row.querySelector('.item-total p').innerText = itemTotal.toLocaleString('vi-VN') + ' đ';
            totalPrice += itemTotal;
        });

        document.getElementById('total-price').innerText = totalPrice.toLocaleString('vi-VN') + ' đ';
    }

    // Gọi hàm updateTotalPrice khi trang được tải
    window.onload = updateTotalPrice;
</script>
@endsection
