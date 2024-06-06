@extends('layouts.appadmin')
@section('title', 'Quản lý sản phẩm')

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">@yield('title')</span></h4>

            <div class="card">
                <h5 class="card-header">
                    <div class="col-md-12 d-flex justify-content-end">
                        <a class="btn btn-success me-2" href="{{ route('admin.menu.create') }}">Tạo Sản Phẩm</a>
                        <a class="btn btn-danger" href="{{ route('admin.menu.trash') }}">Thùng Rác</a>
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
                                <th>Đường Dẫn</th>
                                <th>Kiểu</th>
                                <th>Chúc vụ</th>
                                <th class="col-md-2">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($list as $menu)
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>{{ $menu->id }}</td>
                                    <td>{{ $menu->name }}</td>
                                    <td>{{ $menu->link }}</td>
                                    <td>{{ $menu->type }}</td>
                                    <td>{{ $menu->position }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item waves-effect"
                                                    href="{{ route('admin.menu.edit', ['id' => $menu->id]) }}">
                                                    <i class="mdi mdi-pencil-outline me-1"></i> Chỉnh Sửa
                                                </a>
                                                <a class="dropdown-item waves-effect" href="javascript:void(0)"
                                                    onclick="deletes({{ $menu->id }})">
                                                    <i class="mdi mdi-trash-can-outline me-1"></i> Xóa
                                                </a>
                                                <a class="dropdown-item waves-effect"
                                                    href="{{ route('admin.menu.show', ['id' => $menu->id]) }}">
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
                    Bạn có chắc chắn muốn xóa sản phẩm <b class="text-dark">{{ $menu->name ?? '' }}</b> vào <b class="text-danger">thùng rác</b> không?
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
        function deletes(id) {
            var form = document.getElementById('deleteForm');
            form.action = '{{ route('admin.menu.delete', ['id' => ':id']) }}'.replace(':id', id);
            $('#deleteModal').modal('show');
        }
    </script>
@endsection
