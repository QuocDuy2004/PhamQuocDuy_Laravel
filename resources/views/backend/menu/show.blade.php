@extends('layouts.appadmin')
@section('title', 'Chi tiết thực đơn')

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
                        <a class="btn btn-info" href="{{ route('admin.menu.index') }}">Back</a>
                    </div>
                </h5>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Đường Dẫn</th>
                                <th>Thứ Tự</th>
                                <th>Danh Mục Cha</th>
                                <th>Kiểu</th>
                                <th>Chức Vụ</th>
                                <th>Mã Bảng</th>
                                <th>Ngày Tạo</th>
                                <th>Ngày Cập Nhập</th>
                                <th>Trạng Thái</th>
                                <th class="col-md-2">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($menu as $menus)
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>{{ $menu->id }}</td>
                                <td>{{ $menu->name }}</td>
                                <td>{{ $menu->link }}</td>
                                <td>{{ $menu->sort_order }}</td>
                                <td>{{ $menu->parent_id }}</td>
                                <td>{{ $menu->type }}</td>
                                <td>{{ $menu->position }}</td>
                                <td>{{ $menu->table_id }}</td>
                                <td>{{ $menu->created_at }}</td>
                                <td>{{ $menu->updated_at }}</td>
                                <td>{{ $menu->status }}</td>
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
                                                onclick="deletes({{ $menu->id }}, '{{ $menu->name }}')">
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
                </div>

            </div>
        </div>
    @endsection
