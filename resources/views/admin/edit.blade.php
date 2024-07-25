@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Product</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="name" class="form-label">Tên Sản Phẩm</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>

        <div class="mb-3">
            <label for="new_price" class="form-label">Giá Khuyến Mãi</label>
            <input type="number" class="form-control" id="new_price" name="new_price" value="{{ $product->new_price }}" required>
        </div>

        <div class="mb-3">
            <label for="old_price" class="form-label">Giá Gốc</label>
            <input type="number" class="form-control" id="old_price" name="old_price" value="{{ $product->old_price }}" required>
        </div>

        <div class="mb-3">
            <label for="img" class="form-label">Ảnh</label>
            <input type="file" class="form-control" id="img" name="img">
            @if($product->img)
                <!-- <img src="{{ asset('storage/' . $product->img) }}" alt="Product Image" class="img-thumbnail mt-2" style="width: 150px;"> -->
                <img src="{{ $product->img }}" alt="Product Image" class="img-thumbnail mt-2" style="width: 150px;">
            @endif
        </div>

        <div class="mb-3">
            <label for="desc" class="form-label">Mô Tả</label>
            <textarea class="form-control" id="desc" name="desc" rows="3" required>{{ $product->desc }}</textarea>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Số Lượng</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}" required>
        </div>

        <div class="mb-3">
            <label for="is_active" class="form-label">Trạng Thái</label>
            <select class="form-select" id="is_active" name="is_active" required>
                <option value="1" {{ $product->is_active ? 'selected' : '' }}>Hoạt Động</option>
                <option value="0" {{ !$product->is_active ? 'selected' : '' }}>Không Hoạt Động</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Danh Mục Sản Phẩm</label>
            <select class="form-select" id="category_id" name="category_id">
                <option value="">Chọn Danh Mục</option>
                @foreach(App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
