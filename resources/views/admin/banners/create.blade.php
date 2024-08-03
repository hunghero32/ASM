@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Tạo Banner Mới</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="page-inner">
        <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Tên Banner</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Ảnh</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>

            <div class="mb-3">
                <label for="is_active" class="form-label">Trạng Thái</label>
                <select class="form-select" id="is_active" name="is_active" required>
                    <option value="1" {{ old('is_active') == '1' ? 'selected' : '' }}>Hoạt Động</option>
                    <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Không Hoạt Động</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Tạo Banner</button>
        </form>
        <div class="mt-3">
            <a href="{{ route('banners.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
