@extends('layouts.appadmin')
@section('title', 'Thùng rác bài viết')

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
                        <a class="btn btn-info" href="{{ route('admin.post.index') }}">Back</a>
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
                                <th class="col-md-2">Hình Ảnh</th>
                                <th>Tiêu Đề</th>
                                <th>Đề Tài</th>
                                <th>Đường Dẫn</th>
                                <th>Nội Dung</th>
                                <th>Ngày Tạo</th>
                                <th>Trạng Thái</th>
                                <th class="col-md-2">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($post as $posts)
                                <tr>
                                    <td><input type="checkbox" name="selected_ids[]" value="{{ $posts->id }}"
                                            class="select-checkbox"></td>
                                    <td>{{ $posts->id }}</td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" aria-label="Lilian Fuller"
                                                data-bs-original-title="Lilian Fuller">
                                                @if ($posts->image == null)
                                                    <img src="{{ asset('assets/load.gif') }}" alt="gif"
                                                        class="rounded-circle"
                                                        onclick="showLargeImage('{{ asset('assets/load.gif') }}')">
                                                @else
                                                    <img src="{{ asset('assets/images/post/' . $posts->image) }}"
                                                        alt="{{ $posts->image }}" class="rounded-circle"
                                                        onclick="showLargeImage('{{ asset('assets/images/post/' . $posts->image) }}')">
                                                @endif
                                            </li>
                                        </ul>
                                    </td>

                                    <div id="largeImageContainer" style="display: none;">
                                        <button class="close-btn" onclick="hideLargeImage()">Đóng</button>
                                        <img id="largeImage" src="" alt="Không có hình ảnh hoặc lỗi">
                                    </div>
                                    <td>{{ $posts->title }}</td>
                                    <td>{{ $posts->slug }}</td>
                                    <td>{{ $posts->detail }}</td>
                                    <td>{{ $posts->description }}</td>
                                    <td>{{ $posts->type }}</td>
                                    <td>{{ $posts->created_at }}</td>

                                    <td>
                                        @if ($posts->status == 0)
                                            <p class="text-danger">Đang ở thùng rác</p>
                                        @elseif ($posts->status == 1)
                                            <p class="text-success">Hoạt động</p>
                                        @elseif ($posts->status == 2)
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
                                                    onclick="confirmDelete({{ $posts->id }}, '{{ $posts->title }}')">
                                                    <i class="mdi mdi-trash-can-outline me-1"></i> Xóa vĩnh viễn
                                                </button>
                                                <form id="deleteForm"
                                                    action="{{ route('admin.post.destroy', $posts->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item waves-effect">
                                                        <i class="mdi mdi-trash-can-outline me-1"></i> Xác nhận xóa
                                                    </button>
                                                </form>
                                                <form action="{{ route('admin.post.restore', ['id' => $posts->id]) }}"
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
                    <h5 class="modal-title" id="deleteModalLabel">Xác nhận xóa bài viết</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có chắc chắn muốn xóa bài viết <b class="text-dark" id="postTitle"></b> vào <b
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
        function confirmDelete(postId, postTitle) {
            var form = document.getElementById('deleteForm');
            form.action = '{{ route('admin.post.destroy', '') }}' + '/' + postId;
            document.getElementById('postTitle').innerText = postTitle;
            $('#deleteModal').modal('show');
        }

        document.getElementById('selectAll').addEventListener('change', function(e) {
            const checkboxes = document.querySelectorAll('.select-checkbox');
            checkboxes.forEach(checkbox => checkbox.checked = e.target.checked);
        });
    </script>
    @push('scripts')
        <script>
            document.getElementById('selectAll').addEventListener('change', function(e) {
                const checkboxes = document.querySelectorAll('.select-checkbox');
                checkboxes.forEach(checkbox => checkbox.checked = e.target.checked);
            });
        </script>
    @endpush
