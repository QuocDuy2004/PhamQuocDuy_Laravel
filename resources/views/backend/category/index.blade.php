@extends('layouts.appadmin')
@section('title', 'Quản lý loại')

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
                        <a class="btn btn-success me-2" href="{{ route('admin.category.create') }}">Create</a>
                        <a class="btn btn-danger" href="{{ route('admin.category.trash') }}">Trash</a>
                    </div>
                </h5>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Hình Ảnh</th>
                                <th>Tên</th>
                                <th>Danh Mục</th>
                                <th>Thứ Tự</th>
                                <th>Nội Dung</th>
                                <th>Ngày Tạo</th>
                                <th>Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($categories as $category)
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>{{ $category->id }}</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" aria-label="{{ $category->name }}"
                                            data-bs-original-title="{{ $category->name }}">
                                            <img src="{{ asset('assets/images/' . $category->image) }}" alt="Avatar" class="rounded-circle">
                                        </li>
                                    </ul>
                                </td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->parent_id }}</td>
                                <td>{{ $category->sort_order }}</td>
                                <td>{{ $category->description }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item waves-effect" href="{{ route('admin.product.edit', ['id' => $category->id]) }}">
                                                <i class="mdi mdi-pencil-outline me-1"></i> Edit
                                            </a>
                                            <a class="dropdown-item waves-effect" href="{{ route('admin.product.delete', ['id' => $category->id]) }}">
                                                <i class="mdi mdi-trash-can-outline me-1"></i> Delete
                                            </a>
                                            <a class="dropdown-item waves-effect" href="{{ route('admin.product.show', ['id' => $category->id]) }}">
                                                <i class="mdi mdi-eye"></i> Show
                                            </a>
                                            <a class="dropdown-item waves-effect" href="{{ route('admin.product.update', ['id' => $category->id]) }}">
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
    @endsection
