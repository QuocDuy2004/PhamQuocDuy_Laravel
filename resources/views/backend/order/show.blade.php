@extends('layouts.appadmin')
@section('title', 'Chi tiết đơn hàng')

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
                        <a class="btn btn-info" href="{{ route('admin.order.index') }}">Back</a>
                    </div>
                </h5>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>

                                <th>#</th>
                                <th>ID</th>
                                <th>ID Người dùng</th>
                                <th>Tên</th>
                                <th>Giới Tính</th>
                                <th>Email</th>
                                <th>Điện Thoại</th>
                                <th>Địa Chỉ</th>
                                <th>Ghi chú</th>
                                <th>Kiểu</th>
                                <th>Ngày Tạo</th>
                                <th>Ngày Cập Nhập</th>
                                <th>Thao Tác</th>

                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->user_id }}</td>
                                <td>{{ $order->delivery_name }}</td>
                                <td>
                                    @if ($order->delivery_gender == 1)
                                        <p>Nam</p>
                                    @else
                                        <p>Nữ</p>
                                    @endif
                                </td>
                                <td>{{ $order->delivery_email }}</td>
                                <td>{{ $order->delivery_phone }}</td>
                                <td>{{ $order->delivery_address }}</td>
                                <td>{{ $order->note }}</td>
                                <td>{{ $order->type }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->updated_at }}</td>
                                <td>
                                    @if ($order->status == 0)
                                        <p class="text-danger">Đang ở thùng rác</p>
                                    @elseif ($order->status == 1)
                                        <p class="text-success">Hoạt động</p>
                                    @elseif ($order->status == 2)
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
