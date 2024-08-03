@extends('layouts.admin')

@section('content')
    <h1>Tạo khuyến mãi mới</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.promotes.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ old('description') }}</textarea>
        </div>
        <div>
            <label for="start_date">Start Date:</label>
            <input type="date" id="start_date" name="start_date" value="{{ old('start_date') }}">
        </div>
        <div>
            <label for="end_date">End Date:</label>
            <input type="date" id="end_date" name="end_date" value="{{ old('end_date') }}">
        </div>
        <div>
            <label for="discount">Discount:</label>
            <input type="number" id="discount" name="discount" value="{{ old('discount') }}">
        </div>
        <div>
            <label for="product_id">Product ID:</label>
            <input type="text" id="product_id" name="product_id" value="{{ old('product_id') }}">
        </div>
        <div>
            <label for="is_active">Is Active:</label>
            <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active') ? 'checked' : '' }}>
        </div>
        <button type="submit">Lưu</button>
    </form>
@endsection
