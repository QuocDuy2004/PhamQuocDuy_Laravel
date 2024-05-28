@extends('layouts.appadmin')
@section('title', 'Quản lý thành viên')

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
                        <a class="btn btn-success me-2" href="{{ route('admin.user.create') }}">Create</a>
                        <a class="btn btn-danger" href="{{ route('admin.user.trash') }}">Trash</a>
                    </div>
                </h5>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Điện Thoại</th>
                                <th>Giới tính</th>
                                <th>Cấp Bậc</th>
                                <th>Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($users as $user)
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->phone)
                                            {{ $user->phone }}
                                        @else
                                            <p>Chưa cập nhập số điện thoại</p>
                                        @endif
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        @if ($user->gender == '1')
                                            <p>Nam</p>
                                        @else
                                            <p>Nữ</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($user->roles == 'admin')
                                            <p>Quản trị viên</p>
                                        @else
                                            <p>Khách hàng</p>
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
                                                    <i class="mdi mdi-pencil-outline me-1"></i> Edit
                                                </a>
                                                <a class="dropdown-item waves-effect"
                                                    href="{{ route('admin.user.delete', ['id' => $user->id]) }}">
                                                    <i class="mdi mdi-trash-can-outline me-1"></i> Delete
                                                </a>
                                                <a class="dropdown-item waves-effect"
                                                    href="{{ route('admin.user.show', ['id' => $user->id]) }}">
                                                    <i class="mdi mdi-eye"></i> Show
                                                </a>
                                                <a class="dropdown-item waves-effect"
                                                    href="{{ route('admin.user.update', ['id' => $user->id]) }}">
                                                    <i class="mdi mdi-update"></i> Update
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
    </div>
@endsection
