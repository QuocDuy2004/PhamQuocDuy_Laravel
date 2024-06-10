@extends('layouts.appadmin')
@section('title', 'Chi tiết bài viết')

@section('content')

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">@yield('title')</span></h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">
                    <div class="col-md-12 d-flex justify-content-end">
                        <a class="btn btn-info" href="{{ route('admin.post.index') }}">Back</a>
                    </div>
                </h5>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Hình Ảnh</th>
                                <th>Tiêu Đề</th>
                                <th>Đường Dẫn</th>
                                <th>Đề Tài</th>
                                <th>Nội Dung</th>
                                <th>Ngày Tạo</th>
                                <th>Ngày Cập Nhập</th>
                                <th>Trạng Thái</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>{{ $post->id }}</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" aria-label="Lilian Fuller"
                                            data-bs-original-title="Lilian Fuller">
                                            @if ($post->image == null)
                                                <img src="{{ asset('assets/load.gif') }}" alt="gif"
                                                    class="rounded-circle"
                                                    onclick="showLargeImage('{{ asset('assets/load.gif') }}')">
                                            @else
                                                <img src="{{ asset('assets/images/post/' . $post->image) }}"
                                                    alt="{{ $post->image }}" class="rounded-circle"
                                                    onclick="showLargeImage('{{ asset('assets/images/post/' . $post->image) }}')">
                                            @endif
                                        </li>
                                    </ul>
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->slug }}</td>
                                <td>{{ $post->detail }}</td>
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>{{ $post->updated_at }}</td>
                                <td>
                                    @if ($post->status == 0)
                                        <p class="text-danger">Đang ở thùng rác</p>
                                    @elseif ($post->status == 1)
                                        <p class="text-success">Hoạt động</p>
                                    @elseif ($post->status == 2)
                                        <p class="text-warning">Ngưng hoạt động</p>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
