@extends('layouts.appadmin')
@section('title', 'Quản lý liên hệ')

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
                        <a class="btn btn-success me-2" href="{{ route('admin.post.create') }}">Create</a>
                        <a class="btn btn-danger" href="{{ route('admin.post.trash') }}">Trash</a>
                    </div>
                </h5>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Tiêu Đề</th>
                                <th>Đường Dẫn</th>
                                <th>Đề Tài</th>
                                <th>Nội Dung</th>
                                <th>Hình Ảnh</th>
                                <th>Ngày tạo</th>
                                <th>Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($posts as $post)
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>{{ $post->id }}</td>
                                    <td>
                                        <img src="{{ asset('assets/images/' . $post->image) }}" alt="Hình ảnh">
                                    </td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->slug }}</td>
                                    <td>{{ $post->detail }}</td>
                                    <td>{{ $post->description }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item waves-effect"
                                                    href="{{ route('admin.post.edit', ['id' => $post->id]) }}">
                                                    <i class="mdi mdi-pencil-outline me-1"></i> Sửa
                                                </a>
                                                <a class="dropdown-item waves-effect"
                                                    href="{{ route('admin.post.delete', ['id' => $post->id]) }}">
                                                    <i class="mdi mdi-trash-can-outline me-1"></i> Xóa
                                                </a>
                                                <a class="dropdown-item waves-effect"
                                                    href="{{ route('admin.post.show', ['id' => $post->id]) }}">
                                                    <i class="mdi mdi-eye"></i> Hiển thị
                                                </a>
                                                <a class="dropdown-item waves-effect"
                                                    href="{{ route('admin.post.update', ['id' => $post->id]) }}">
                                                    <i class="mdi mdi-update"></i> Cập nhật
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
