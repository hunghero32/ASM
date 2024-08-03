@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Chỉnh sửa khuyến mãi</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('admin.promotes.update', $promote) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên:</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $promote->name) }}" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="description" class="form-label">Mô tả:</label>
                                <textarea id="description" name="description" class="form-control" required>{{ old('description', $promote->description) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="start_date" class="form-label">Ngày bắt đầu:</label>
                                <input type="date" id="start_date" name="start_date" class="form-control" value="{{ old('start_date', $promote->start_date) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="end_date" class="form-label">Ngày kết thúc:</label>
                                <input type="date" id="end_date" name="end_date" class="form-control" value="{{ old('end_date', $promote->end_date) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="discount" class="form-label">Giảm giá:</label>
                                <input type="number" id="discount" name="discount" class="form-control" value="{{ old('discount', $promote->discount) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="product_id" class="form-label">ID sản phẩm:</label>
                                <input type="text" id="product_id" name="product_id" class="form-control" value="{{ old('product_id', $promote->product_id) }}" required>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" id="is_active" name="is_active" value="1" class="form-check-input" {{ old('is_active', $promote->is_active) ? 'checked' : '' }}>
                                <label for="is_active" class="form-check-label">Kích hoạt</label>
                            </div>

                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                            <a href="{{ route('admin.promotes.index') }}" class="btn btn-secondary">Quay lại</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
