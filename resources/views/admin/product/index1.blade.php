@extends('layouts.admin')

@section('content')
<div class="">
<h1>Admin Dashboard</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Tên Sản Phẩm</th>
                <th scope="col">Giá Bán/Giá KM</th>
                <th scope="col">Số Lượng</th>
                <th scope="col">Trạng Thái</th>
                <th scope="col">Cấu Hình</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td><a href="{{ route('admin.show', $product->id) }}">
                @php
                    $imgUrl = filter_var($product->img, FILTER_VALIDATE_URL) ? $product->img : Storage::url($product->img);
                    @endphp
                    <img src="{{ $imgUrl }}" class="card-img-top" alt="{{ $product->name }}" style="width: 50px;">
                    </a></td>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->old_price, 0, ',', '.') }}đ / {{ number_format($product->new_price, 0, ',', '.') }}đ</td>
                <td>{{ $product->quantity }}</td>
                <td>
                    @if($product->is_active)
                    <p class="text-success">Hoạt động</p>
                    @else
                    <p class="text-danger">Không hoạt động</p>
                    @endif
                </td>
                <td>
                <button><a href="{{ route('admin.show', $product->id) }}">Chi tiết</a></button>
                <button><a href="{{ route('admin.edit', $product->id) }}">Sửa</a></button>
                    <form action="{{ route('admin.destroy', $product->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Xóa</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
