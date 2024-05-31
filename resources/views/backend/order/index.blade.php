@extends('layouts.appadmin')
@section('title', 'Quản lý đơn hàng')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">

            <h4 class="py-3 mb-4"><span class="text-muted fw-light">@yield('title')</span>
            </h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">
                    <div class="col-md-12 d-flex justify-content-end">
                        <a class="btn btn-success me-2" href="{{ route('admin.order.create') }}">Create</a>
                        <a class="btn btn-danger" href="{{ route('admin.order.trash') }}">Trash</a>
                    </div>
                </h5>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Giới Tính</th>
                                <th>Email</th>
                                <th>Điện Thoại</th>
                                <th>Địa Chỉ</th>
                                <th>Ghi chú</th>
                                <th>Ngày Tạo</th>
                                <th>Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($orders as $order)
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->delivery_name }}</td>
                                <td>{{ $order->delivery_gender }}</td>
                                <td>{{ $order->delivery_email }}</td>
                                <td>{{ $order->delivery_phone }}</td>
                                <td>{{ $order->delivery_address }}</td>
                                <td>{{ $order->note }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item waves-effect" href="{{ route('admin.order.edit', ['id' => $order->id]) }}">
                                                <i class="mdi mdi-pencil-outline me-1"></i> Edit
                                            </a>
                                            <a class="dropdown-item waves-effect" href="{{ route('admin.order.delete', ['id' => $order->id]) }}">
                                                <i class="mdi mdi-trash-can-outline me-1"></i> Delete
                                            </a>
                                            <a class="dropdown-item waves-effect" href="{{ route('admin.order.show', ['id' => $order->id]) }}">
                                                <i class="mdi mdi-eye"></i> Show
                                            </a>
                                            <a class="dropdown-item waves-effect" href="{{ route('admin.order.update', ['id' => $order->id]) }}">
                                                <i class="mdi mdi-update"></i> Update
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    @endsection
