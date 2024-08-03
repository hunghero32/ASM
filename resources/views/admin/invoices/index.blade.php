@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Danh sách Hóa Đơn</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Cart ID</th>
                <th>Tổng</th>
                <th>Ngày Hóa Đơn</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
            <tr>
                <td>{{ $invoice->id }}</td>
                <td>{{ $invoice->cart_id }}</td>
                <td>{{ $invoice->total }}</td>
                <td>{{ $invoice->invoice_date }}</td>
                <td>
                    <a href="{{ route('admin.invoices.show', $invoice->id) }}" class="btn btn-primary">Xem chi tiết</a>
                    <form action="{{ route('admin.invoices.destroy', $invoice->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
