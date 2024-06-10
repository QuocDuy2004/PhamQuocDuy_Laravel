@extends('layouts.appadmin')
@section('title', 'Thùng rác đề tài')

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
                        <a class="btn btn-info" href="{{ route('admin.topic.index') }}">Back</a>
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
                                <th><input type="checkbox" id="selectAll"></th>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Đường Dẫn</th>
                                <th>Sắp Xếp</th>
                                <th>Nội Dung</th>
                                <th>Ngày Tạo</th>
                                <th>Ngày Cập Nhập</th>
                                <th>Trạng Thái</th>
                                <th class="col-md-2">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($topic as $topics)
                                <tr>
                                    <td><input type="checkbox" name="selected_ids[]" value="{{ $topics->id }}"
                                            class="select-checkbox"></td>
                                    <td>{{ $topics->id }}</td>
                                    <td>{{ $topics->name }}</td>
                                    <td>{{ $topics->slug }}</td>
                                    <td>{{ $topics->sort_order }}</td>
                                    <td>{{ $topics->description }}</td>
                                    <td>{{ $topics->created_at }}</td>
                                    <td>{{ $topics->updated_at }}</td>
                                    <td>
                                        @if ($topics->status == 0)
                                            <p class="text-danger">Đang ở thùng rác</p>
                                        @elseif ($topics->status == 1)
                                            <p class="text-success">Hoạt động</p>
                                        @elseif ($topics->status == 2)
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
                                                    onclick="confirmDelete({{ $topics->id }}, '{{ $topics->name }}')">
                                                    <i class="mdi mdi-trash-can-outline me-1"></i> Xóa vĩnh viễn
                                                </button>

                                                <form id="deleteForm"
                                                    action="{{ route('admin.topic.destroy', $topics->id) }}"
                                                    method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item waves-effect">
                                                        <i class="mdi mdi-trash-can-outline me-1"></i> Xác nhận xóa
                                                    </button>
                                                </form>
                                                <form
                                                    action="{{ route('admin.topic.restore', ['id' => $topics->id]) }}"
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
                    <h5 class="modal-title" id="deleteModalLabel">Xác nhận xóa đề tài</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có chắc chắn muốn xóa đề tài <b class="text-dark"><span id="topicName"></span></b> <b
                        class="text-danger">vĩnh viễn</b> không?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-danger" form="deleteForm">Xóa</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete(topicId, topicName) {
            var form = document.getElementById('deleteForm');
            form.action = '{{ route('admin.topic.destroy', '') }}' + '/' + topicId;
            var topicNameElement = document.getElementById('topicName');
            topicNameElement.textContent = topicName;
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
