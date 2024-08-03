@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Chi tiết hóa đơn</h2>

    <div class="mb-4">
        <strong>ID hóa đơn:</strong> {{ $invoice->id }}
    </div>

    <div class="mb-4">
        <strong>Tên người mua:</strong> {{ $invoice->cart->user->name }}
    </div>

    <div class="mb-4">
        <strong>Email người mua:</strong> {{ $invoice->cart->user->email }}
    </div>

    <div class="mb-4">
        <strong>Tổng số tiền:</strong> {{ number_format($invoice->total, 0, ',', '.') }} đ
    </div>

    <h3>Danh sách sản phẩm trong giỏ hàng:</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoice->cart->products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->pivot->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('admin.invoices.index') }}" class="btn btn-primary">Quay lại danh sách hóa đơn</a>
</div>
@endsection
