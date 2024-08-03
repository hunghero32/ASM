<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác nhận đơn hàng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f8f9fa;
        }
        h1 {
            color: #4CAF50;
        }
        .total {
            font-weight: bold;
            font-size: 1.2rem;
        }
        .product-item {
            border-bottom: 1px solid #dee2e6;
            padding: 10px 0;
        }
        .product-item:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Cảm ơn bạn đã mua hàng, {{ $customerName }}!</h1>
        <p class="text-center">Dưới đây là thông tin đơn hàng của bạn:</p>
        <ul class="list-group">
            @php
                $totalAmount = 0; // Khởi tạo tổng số tiền
            @endphp

            @foreach ($cartItems as $item)
                @php
                    $productTotal = $item->product->new_price * $item->quantity; // Tính tổng cho sản phẩm
                    $totalAmount += $productTotal; // Cập nhật tổng số tiền
                @endphp
                <li class="list-group-item product-item">
                    <h5>{{ $item->product->name }}</h5>
                    <p>Số lượng: <strong>{{ $item->quantity }}</strong></p>
                    <p>Giá: <strong>{{ number_format($item->product->new_price, 0, ',', '.') }} đ</strong></p>
                    <p>Tổng: <strong>{{ number_format($productTotal, 0, ',', '.') }} đ</strong></p>
                </li>
            @endforeach
        </ul>

        <p class="total text-center mt-4">Tổng số tiền: <strong>{{ number_format($totalAmount, 0, ',', '.') }} đ</strong></p>
        <p class="text-center">Chúc bạn có một ngày tốt lành!</p>
    </div>
</body>
</html>
