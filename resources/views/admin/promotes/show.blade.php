@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Chi tiết khuyến mãi</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <strong>ID:</strong> {{ $promote->id }}
                        </div>
                        <div class="mb-3">
                            <strong>Tên:</strong> {{ $promote->name }}
                        </div>
                        <div class="mb-3">
                            <strong>Mô tả:</strong> {{ $promote->description }}
                        </div>
                        <div class="mb-3">
                            <strong>Ngày bắt đầu:</strong> {{ $promote->start_date }}
                        </div>
                        <div class="mb-3">
                            <strong>Ngày kết thúc:</strong> {{ $promote->end_date }}
                        </div>
                        <div class="mb-3">
                            <strong>Giảm giá:</strong> {{ $promote->discount }}
                        </div>
                        <div class="mb-3">
                            <strong>ID sản phẩm:</strong> {{ $promote->product_id }}
                        </div>
                        <div class="mb-3">
                            <strong>Trạng thái:</strong> {{ $promote->is_active ? 'Có' : 'Không' }}
                        </div>
                        <a href="{{ route('admin.promotes.index') }}" class="btn btn-secondary">Quay lại danh sách</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
