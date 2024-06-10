@extends('layouts.appadmin')
@section('title', 'Chi tiết thương hiệu')

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
                        <a class="btn btn-info" href="{{ route('admin.brand.index') }}">Back</a>
                    </div>
                </h5>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th class="col-md-2">Hình Ảnh</th>
                                <th>Tên</th>
                                <th>Đường Dẫn</th>
                                <th>Mô Tả</th>
                                <th>Sắp Xếp</th>
                                <th>Ngày Tạo</th>
                                <th>Ngày Cập Nhật</th>
                                <th>Trạng Thái</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>{{ $brand->id }}</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" aria-label="Lilian Fuller"
                                            data-bs-original-title="Lilian Fuller">
                                            @if ($brand->image == null)
                                                <img src="{{ asset('assets/load.gif') }}" alt="gif"
                                                    class="rounded-circle"
                                                    onclick="showLargeImage('{{ asset('assets/load.gif') }}')">
                                            @else
                                                <img src="{{ asset('assets/images/brand/' . $brand->image) }}"
                                                    alt="{{ $brand->image }}" class="rounded-circle"
                                                    onclick="showLargeImage('{{ asset('assets/images/brand/' . $brand->image) }}')">
                                            @endif
                                        </li>
                                    </ul>
                                </td>
                                <td>{{ $brand->name }}</td>
                                <td>{{ $brand->slug }}</td>
                                <td>{{ $brand->description }}</td>
                                <td>{{ $brand->sort_order }}</td>
                                <td>{{ $brand->created_at }}</td>
                                <td>{{ $brand->updated_at }}</td>
                                <td>
                                    @if ($brand->status == 0)
                                        <p class="text-danger">Đang ở thùng rác</p>
                                    @elseif ($brand->status == 1)
                                        <p class="text-success">Hoạt động</p>
                                    @elseif ($brand->status == 2)
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
