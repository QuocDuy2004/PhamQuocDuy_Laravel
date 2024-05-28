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
                        <a class="btn btn-success me-2" href="{{ route('admin.contact.create') }}">Create</a>
                        <a class="btn btn-danger" href="{{ route('admin.contact.trash') }}">Trash</a>
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
                                <th>Điện thoại</th>
                                <th>Tiêu Đề</th>
                                <th>Nội Dung</th>
                                <th>Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>{{ $contact->id }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td> <!-- Sửa chính tả 'emai' thành 'email' -->
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->title }}</td>
                                    <td>{{ $contact->content }}</td> <!-- Sửa từ 'nội dung' thành 'content' -->
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item waves-effect" href="{{ route('admin.contact.edit', ['id' => $contact->id]) }}">
                                                    <i class="mdi mdi-pencil-outline me-1"></i> Sửa
                                                </a>
                                                <a class="dropdown-item waves-effect" href="{{ route('admin.contact.delete', ['id' => $contact->id]) }}">
                                                    <i class="mdi mdi-trash-can-outline me-1"></i> Xóa
                                                </a>
                                                <a class="dropdown-item waves-effect" href="{{ route('admin.contact.show', ['id' => $contact->id]) }}">
                                                    <i class="mdi mdi-eye"></i> Hiển thị
                                                </a>
                                                <a class="dropdown-item waves-effect" href="{{ route('admin.contact.update', ['id' => $contact->id]) }}">
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
