@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Danh sách khuyến mãi</h4>
                            <a href="{{ route('admin.promotes.create') }}" class="btn btn-primary btn-round ms-auto">
                                <i class="fa fa-plus"></i>
                                Tạo khuyến mãi mới
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Discount</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($promotes as $promote)
                                    <tr>
                                        <td>{{ $promote->id }}</td>
                                        <td>{{ $promote->name }}</td>
                                        <td>{{ $promote->description }}</td>
                                        <td>{{ $promote->start_date }}</td>
                                        <td>{{ $promote->end_date }}</td>
                                        <td>{{ $promote->discount }}%</td>
                                        <td>
                                            <div class="form-button-action d-flex justify-content-around">
                                                <a href="{{ route('admin.promotes.show', $promote) }}" class="btn btn-link btn-info btn-lg" data-bs-toggle="tooltip" title="Chi tiết">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.promotes.edit', $promote) }}" class="btn btn-link btn-primary btn-lg" data-bs-toggle="tooltip" title="Chỉnh sửa">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.promotes.destroy', $promote) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link btn-danger btn-lg" data-bs-toggle="tooltip" title="Xóa">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
