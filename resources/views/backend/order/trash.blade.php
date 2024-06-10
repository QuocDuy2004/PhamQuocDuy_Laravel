@extends('layouts.appadmin')
@section('title', 'Thùng rác đơn hàng')

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">@yield('title')</span></h4>

            <div class="card">
                <h5 class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <button type="button" class="btn btn-danger me-2" onclick="submitBulkAction('bulk-delete')">Xóa đã
                            chọn</button>
                        <button type="button" class="btn btn-success" onclick="submitBulkAction('bulk-restore')">Khôi phục
                            đã chọn</button>
                    </div>
                    <div>
                        <a class="btn btn-info" href="{{ route('admin.order.index') }}">Back</a>
                    </div>
                </h5>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

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
                                <th>Trạng Thái</th>
                                <th>Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($orders as $order)
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
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <button type="button" class="dropdown-item waves-effect"
                                                    onclick="deletes({{ $order->id }}, '{{ $order->delivery_name }}')">
                                                    <i class="mdi mdi-trash-can-outline me-1"></i> Xóa vĩnh viễn
                                                </button>

                                                <form id="deleteForm"
                                                    action="{{ route('admin.order.destroy', $order->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item waves-effect">
                                                        <i class="mdi mdi-trash-can-outline me-1"></i> Xác nhận xóa
                                                    </button>
                                                </form>
                                                <form action="{{ route('admin.order.restore', ['id' => $order->id]) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item waves-effect">
                                                        <i class="mdi mdi-restore"></i> Khôi phục
                                                    </button>
                                                </form>
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
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Xác nhận xóa đơn hàng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có chắc chắn muốn xóa đơn hàng <b class="text-dark"><span id="orderName"></span></b> <b
                        class="text-danger">vĩnh viễn</b> không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <form id="deleteForm" action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Đồng Ý</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deletes(id, deliveryName) {
            var form = document.getElementById('deleteForm');
            form.action = '{{ route('admin.order.destroy', ['id' => ':id']) }}'.replace(':id', id);
            var orderNameElement = document.getElementById('orderName');
            orderNameElement.textContent = deliveryName;
            $('#deleteModal').modal('show');
        }
    </script>

    @push('scripts')
        <script>
            document.getElementById('selectAll').addEventListener('change', function(e) {
                const checkboxes = document.querySelectorAll('.select-checkbox');
                checkboxes.forEach(checkbox => checkbox.checked = e.target.checked);
            });
        </script>
    @endpush
