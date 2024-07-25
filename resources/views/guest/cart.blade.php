@extends('layouts.user')

@section('content')
<div class="container">
    <h1>Giỏ hàng của bạn</h1>

    @if($cartItems->isEmpty())
    <p>Giỏ hàng của bạn đang trống.</p>
    @else
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Ảnh</th>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Tổng </th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody id="cart-items">
            @foreach($cartItems as $item)
            @php
                $product = $item->product;
                $total = $product->new_price * $item->quantity;
            @endphp
            <tr>
            @php
                    $imgUrl = filter_var($product->img, FILTER_VALIDATE_URL) ? $product->img : Storage::url($product->img);
                    @endphp
                    <img src="{{ $imgUrl }}" class="card-img-top" alt="{{ $product->name }}">
            </tr>
            <tr data-price="{{ $product->new_price }}" data-quantity="{{ $item->quantity }}">
                <td>{{ $product->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ number_format($product->new_price, 0, ',', '.') }} đ</td>
                <td class="item-total">{{ number_format($total, 0, ',', '.') }} đ</td>
                <td>
                    <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mb-4">
        <h5>Tổng Thanh Toán: <span id="total-price">{{ number_format($totalPrice ?? 0, 0, ',', '.') }} đ</span></h5>
    </div>

    <form action="{{ route('cart.checkout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success">Thanh toán COD</button>
    </form>
    @endif
</div>

<script>
    function updateTotalPrice() {
        let totalPrice = 0;

        document.querySelectorAll('#cart-items tr').forEach(row => {
            const price = parseFloat(row.dataset.price);
            const quantity = parseInt(row.dataset.quantity);
            const itemTotal = price * quantity;

            row.querySelector('.item-total').innerText = itemTotal.toLocaleString('vi-VN') + ' đ';
            totalPrice += itemTotal;
        });

        document.getElementById('total-price').innerText = totalPrice.toLocaleString('vi-VN') + ' đ';
    }

    // Gọi hàm updateTotalPrice khi trang được tải
    window.onload = updateTotalPrice;
</script>
@endsection
