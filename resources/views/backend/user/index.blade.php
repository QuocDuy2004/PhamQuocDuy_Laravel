@extends('layouts.appadmin')
@section('title', 'Quản lý thành viên')

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">@yield('title')</span></h4>

            <div class="card">
                <h5 class="card-header">
                    <div class="col-md-12 d-flex justify-content-end">
                        <a class="btn btn-success me-2" href="{{ route('admin.user.create') }}">Tạo Thành viên</a>
                        <a class="btn btn-danger" href="{{ route('admin.user.trash') }}">Thùng Rác</a>
                    </div>
                </h5>
                @if (session('success'))
                    <script>
                        showSuccessMessage('{{ session('success') }}');
                    </script>
                @endif

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Username</th>
                                <th>Giới tính</th>
                                <th class="col-2">Vài trò</th>
                                <th class="col-md-2">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($list as $user)
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="col-2">{{ $user->phone }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td class="col-2">
                                        @if ($user->gender == 1)
                                            <p>Nam</p>
                                        @else
                                        <p>Nữ</p>
                                        @endif
                                    </td>
                                    <td class="col-2">
                                        @if ($user->roles == 'customer')
                                            <p>Khách hàng</p>
                                        @else
                                        <p>Quản trị viên</p>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item waves-effect"
                                                    href="{{ route('admin.user.edit', ['id' => $user->id]) }}">
                                                    <i class="mdi mdi-pencil-outline me-1"></i> Chỉnh Sửa
                                                </a>
                                                <a class="dropdown-item waves-effect" href="javascript:void(0)"
                                                    onclick="deletes({{ $user->id }}, '{{ $user->name }}')">
                                                    <i class="mdi mdi-trash-can-outline me-1"></i> Xóa
                                                </a>
                                                <a class="dropdown-item waves-effect"
                                                    href="{{ route('admin.user.show', ['id' => $user->id]) }}">
                                                    <i class="mdi mdi-eye"></i> Xem
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination links -->
                    <div class="d-flex justify-content-end">
                        {{ $list->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Xác nhận xóa sản phẩm</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có chắc chắn muốn xóa thể loại <b class="text-dark"><span id="userName"></span></b> vào <b
                        class="text-danger">thùng rác</b> không?
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
        function deletes(id, name) {
            var form = document.getElementById('deleteForm');
            form.action = '{{ route('admin.user.delete', ['id' => ':id']) }}'.replace(':id', id);
            var userNameElement = document.getElementById('userName');
            userNameElement.textContent = name;
            $('#deleteModal').modal('show');
        }
    </script>
@endsection