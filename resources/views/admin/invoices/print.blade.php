<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Invoice</title>
    <link rel="stylesheet" href="{{ asset('css/print.css') }}">
</head>
<body>
<div class="container">
    <h1>Hóa Đơn #{{ $invoice->id }}</h1>
    <p><strong>Cart ID:</strong> {{ $invoice->cart_id }}</p>
    <p><strong>Tổng:</strong> {{ $invoice->total }}</p>
    <p><strong>Ngày Hóa Đơn:</strong> {{ $invoice->invoice_date }}</p>

    <h2>Danh Sách Sản Phẩm</h2>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên Sản Phẩm</th>
                <th>Số Lượng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->pivot->quantity }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
