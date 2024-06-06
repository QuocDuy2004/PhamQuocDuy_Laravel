@extends('layouts.appadmin')
@section('title', 'Quản lý ngọn cờ')

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
                        <a class="btn btn-success me-2" href="{{ route('admin.banner.create') }}">Create</a>
                        <a class="btn btn-danger" href="{{ route('admin.banner.trash') }}">Trash</a>
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
                                <th>Hình Ảnh</th>
                                <th>Tên</th>
                                <th>Đường Dẫn</th>
                                <th>Chúc Vụ</th>
                                <th>Mô Tả</th>
                                <th>Ngày Tạo</th>
                                <th>Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($list as $banner)
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>{{ $banner->id }}</td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" aria-label="Lilian Fuller"
                                                data-bs-original-title="Lilian Fuller">
                                                @if ($banner->image == null)
                                                    <img src="{{ asset('assets/load.gif') }}" alt="gif"
                                                        class="rounded-circle"
                                                        onclick="showLargeImage('{{ asset('assets/load.gif') }}')">
                                                @else
                                                    <img src="{{ asset('assets/images/' . $banner->image) }}"
                                                        alt="{{ $banner->image }}" class="rounded-circle"
                                                        onclick="showLargeImage('{{ asset('assets/images/' . $banner->image) }}')">
                                                @endif
                                            </li>
                                        </ul>
                                    </td>
                                    <td>{{ $banner->name }}</td>
                                    <td>{{ $banner->link }}</td>
                                    <td>{{ $banner->position }}</td>
                                    <td>{{ $banner->description }}</td>
                                    <td>{{ $banner->created_at }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item waves-effect"
                                                    href="{{ route('admin.banner.edit', ['id' => $banner->id]) }}">
                                                    <i class="mdi mdi-pencil-outline me-1"></i> Chỉnh Sửa
                                                </a>
                                                <a class="dropdown-item waves-effect" href="javascript:void(0)"
                                                    onclick="deletes({{ $banner->id }}, '{{ $banner->name }}')">
                                                    <i class="mdi mdi-trash-can-outline me-1"></i> Xóa
                                                </a>
                                                <a class="dropdown-item waves-effect"
                                                    href="{{ route('admin.banner.show', ['id' => $banner->id]) }}">
                                                    <i class="mdi mdi-eye"></i> Xem
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        {{ $list->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Xác nhận xóa thể loại</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc chắn muốn xóa thể loại <b class="text-dark"><span id="bannerName"></span></b> vào <b
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
                form.action = '{{ route('admin.banner.delete', ['id' => ':id']) }}'.replace(':id', id);
                var bannerNameElement = document.getElementById('bannerName');
                bannerNameElement.textContent = name;
                $('#deleteModal').modal('show');
            }
        </script>

    @endsection
