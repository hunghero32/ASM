@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Sửa Người Dùng</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Tên</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>

        <div class="mb-3">
            <label for="rule" class="form-label">Quyền</label>
            <select class="form-select" id="rule" name="rule" required>
                <option value="1" {{ $user->rule == 1 ? 'selected' : '' }}>Admin</option>
                <option value="0" {{ $user->rule == 0 ? 'selected' : '' }}>Người Dùng</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
@endsection
