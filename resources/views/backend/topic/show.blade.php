@extends('layouts.appadmin')
@section('title', 'Chi tiết đề tài')

@section('content')

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">@yield('title')</span></h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">
                    <div class="col-md-12 d-flex justify-content-end">
                        <a class="btn btn-info" href="{{ route('admin.topic.index') }}">Back</a>
                    </div>
                </h5>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Đường Dẫn</th>
                                <th>Sắp xếp</th>
                                <th>Nội Dung</th>
                                <th>Ngày Tạo</th>
                                <th>Ngày Cập Nhật</th>
                                <th>Trạng Thái</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>{{ $topic->id }}</td>
                                <td>{{ $topic->name }}</td>
                                <td>{{ $topic->slug }}</td>
                                <td>{{ $topic->sort_order }}</td>
                                <td>{{ $topic->description }}</td>
                                <td>{{ $topic->created_at }}</td>
                                <td>{{ $topic->updated_at }}</td>
                                <td>
                                    @if ($topic->status == 0)
                                        <p class="text-danger">Đang ở thùng rác</p>
                                    @elseif ($topic->status == 1)
                                        <p class="text-success">Hoạt động</p>
                                    @elseif ($topic->status == 2)
                                        <p class="text-warning">Ngưng hoạt động</p>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
