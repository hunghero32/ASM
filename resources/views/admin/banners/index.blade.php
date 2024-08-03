@extends('layouts.admin')

@section('content')
<div class="">
    <h1>Admin Dashboard</h1>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Quản Lý Banner</h4>
                                <a href="{{ route('banners.create') }}" class="btn btn-primary btn-round ms-auto">
                                    <i class="fa fa-plus"></i>
                                    Thêm Banner
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
                                            <th>#</th>
                                            <th>Ảnh</th>
                                            <th>Tên Banner</th>
                                            <th>Trạng Thái</th>
                                            <th>Cấu Hình</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($banners as $banner)
                                        <tr>
                                            <th scope="row">{{ $banner->id }}</th>
                                            <td>
                                                    @php
                                                    $imgUrl = filter_var($banner->image, FILTER_VALIDATE_URL) ? $banner->image : Storage::url($banner->image);
                                                    @endphp
                                                    <img src="{{ $imgUrl }}" class="card-img-top" alt="{{ $banner->name }}" style="width: 200px;">
                                                </a></td>
                                            <td>{{ $banner->name }}</td>
                                            <td>
                                                @if($banner->is_active)
                                                <p class="text-success">Hoạt động</p>
                                                @else
                                                <p class="text-danger">Không hoạt động</p>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="form-button-action d-flex justify-content-around">
                                                    <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-link btn-primary btn-lg" data-bs-toggle="tooltip" title="Sửa">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('banners.destroy', $banner->id) }}" method="POST" style="display: inline;">
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

    <script>
        $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#177dff",
            fillColor: "rgba(23, 125, 255, 0.14)",
        });

        $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#f3545d",
            fillColor: "rgba(243, 84, 93, .14)",
        });

        $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#ffa534",
            fillColor: "rgba(255, 165, 52, .14)",
        });
    </script>