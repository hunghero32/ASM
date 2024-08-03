@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Chỉnh Sửa Banner</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="page-inner">
        <form action="{{ route('banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="name" class="form-label">Tên Banner</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $banner->name }}" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Ảnh</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($banner->image)
                    @php
                        $imgUrl = filter_var($banner->image, FILTER_VALIDATE_URL) ? $banner->image : Storage::url($banner->image);
                    @endphp
                    <img src="{{ $imgUrl }}" class="card-img-top" alt="{{ $banner->name }}" style="width: 150px; margin-top: 10px;">
                @endif
            </div>

            <div class="mb-3">
                <label for="is_active" class="form-label">Trạng Thái</label>
                <select class="form-select" id="is_active" name="is_active" required>
                    <option value="1" {{ $banner->is_active ? 'selected' : '' }}>Hoạt Động</option>
                    <option value="0" {{ !$banner->is_active ? 'selected' : '' }}>Không Hoạt Động</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Cập Nhật</button>
        </form>
        <div class="mt-3">
            <a href="{{ route('banners.index') }}" class="btn btn-secondary">Quay Lại</a>
        </div>
    </div>
</div>
@endsection
