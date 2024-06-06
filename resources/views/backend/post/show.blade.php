@extends('layouts.appadmin')
@section('title', 'Chi tiết bài viết')

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
                        <a class="btn btn-info" href="{{ route('admin.product.index') }}">Back</a>
                    </div>
                </h5>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>ID Chủ Đề</th>
                                <th>Đường Dẫn</th>
                                <th>Tiêu Đề</th>
                                <th>Miêu Tả</th>
                                <th class="col-md-2">Hình Ảnh</th>
                                <th>Kiểu</th>
                                <th>Ngày Tạo</th>
                                <th>Ngày Cập Nhập</th>
                                <th>Trạng Thái</th>
                                <th class="col-md-2">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($post as $posts)
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>{{ $posts->id }}</td>
                                    <td>{{ $posts->topic_id }}</td>
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
                                                    <img src="{{ asset('assets/images/' . $posts->image) }}"
                                                        alt="{{ $posts->image }}" class="rounded-circle"
                                                        onclick="showLargeImage('{{ asset('assets/images/' . $posts->image) }}')">
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
                                    <td>{{ $posts->updated_at }}</td>
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
                                                <a class="dropdown-item waves-effect"
                                                    href="{{ route('admin.post.edit', ['id' => $posts->id]) }}">
                                                    <i class="mdi mdi-pencil-outline me-1"></i> Chỉnh Sửa
                                                </a>
                                                <a class="dropdown-item waves-effect" href="javascript:void(0)"
                                                    onclick="deletes({{ $posts->id }})">
                                                    <i class="mdi mdi-trash-can-outline me-1"></i> Xóa
                                                </a>
                                                <a class="dropdown-item waves-effect"
                                                    href="{{ route('admin.post.show', ['id' => $posts->id]) }}">
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
