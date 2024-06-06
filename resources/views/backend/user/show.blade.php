@extends('layouts.appadmin')
@section('title', 'Chi tiết thành viên')

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
                        <a class="btn btn-info" href="{{ route('admin.product.index') }}">Back</a>
                    </div>
                </h5>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Hình ảnh</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Username</th>
                                <th>Mật khẩu</th>
                                <th>Giới tính</th>
                                <th>Địa chỉ</th>
                                <th>Vai trò</th>
                                <th>Ngày Tạo</th>
                                <th>Ngày Cập Nhật</th>
                                <th>Trạng Thái</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" aria-label="Lilian Fuller"
                                            data-bs-original-title="Lilian Fuller">
                                            @if ($user->image == null)
                                                <img src="{{ asset('assets/load.gif') }}" alt="gif"
                                                    class="rounded-circle"
                                                    onclick="showLargeImage('{{ asset('assets/load.gif') }}')">
                                            @else
                                                <img src="{{ asset('assets/images/' . $user->image) }}"
                                                    alt="{{ $user->image }}" class="rounded-circle"
                                                    onclick="showLargeImage('{{ asset('assets/images/' . $user->image) }}')">
                                            @endif
                                        </li>
                                    </ul>
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="col-2">{{ $user->phone }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->password }}</td>
                                <td>
                                    @if ($user->gender==1)
                                        <p>Nam</p>
                                    @elseif ($user->gender==2)
                                    <p>Nữ</p>
                                    @endif
                                </td>
                                <td>{{ $user->address }}</td>
                                <td>
                                    @if ($user->roles == 'admin')
                                    <p>Quản trị viên</p>
                                @else
                                <p>Khách hàng</p>
                                @endif
                                </td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                                <td>
                                    @if ($user->status == 0)
                                        <p class="text-danger">Đang ở thùng rác</p>
                                    @elseif ($user->status == 1)
                                        <p class="text-success">Hoạt động</p>
                                    @elseif ($user->status == 2)
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
