@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Tạo Danh Mục Sản Phẩm</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="page-inner">
        <form action="{{ route('admin.category.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Tên Danh Mục</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label for="desc" class="form-label">Mô Tả</label>
                <textarea class="form-control" id="desc" name="desc" rows="3" required>{{ old('desc') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="is_active" class="form-label">Trạng Thái</label>
                <select class="form-select" id="is_active" name="is_active" required>
                    <option value="1" {{ old('is_active') == '1' ? 'selected' : '' }}>Hoạt Động</option>
                    <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Không Hoạt Động</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Tạo</button>
        </form>
        <div class="mt-3">
            <a href="{{ route('admin.category.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
