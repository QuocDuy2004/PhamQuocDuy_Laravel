@extends('layouts.appadmin')
@section('title', 'Chi tiết sản phẩm')

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
                                <th>ID Thể Loại</th>
                                <th>ID Thương Hiệu</th>
                                <th class="col-md-2">Hình Ảnh</th>
                                <th>Tên</th>
                                <th>Đề Tài</th>
                                <th>Đường Dẫn</th>
                                <th>Nội Dung</th>
                                <th>Giá</th>
                                <th>Giá Giảm</th>
                                <th>Ngày Tạo</th>
                                <th>Ngày Cập Nhập</th>
                                <th>Trạng Thái</th>
                                <th class="col-md-2">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($product as $products)
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>{{ $products->id }}</td>
                                    <td>{{ $products->category_id }}</td>
                                    <td>{{ $products->brand_id }}</td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" aria-label="Lilian Fuller"
                                                data-bs-original-title="Lilian Fuller">
                                                @if ($products->image == null)
                                                    <img src="{{ asset('assets/load.gif') }}" alt="gif"
                                                        class="rounded-circle"
                                                        onclick="showLargeImage('{{ asset('assets/load.gif') }}')">
                                                @else
                                                    <img src="{{ asset('assets/images/' . $products->image) }}"
                                                        alt="{{ $products->image }}" class="rounded-circle"
                                                        onclick="showLargeImage('{{ asset('assets/images/' . $products->image) }}')">
                                                @endif
                                            </li>
                                        </ul>
                                    </td>

                                    <div id="largeImageContainer" style="display: none;">
                                        <button class="close-btn" onclick="hideLargeImage()">Đóng</button>
                                        <img id="largeImage" src="" alt="Không có hình ảnh hoặc lỗi">
                                    </div>
                                    <td>{{ $products->name }}</td>
                                    <td>{{ $products->detail }}</td>
                                    <td>{{ $products->slug }}</td>
                                    <td>{{ $products->description }}</td>
                                    <td>{{ $products->price }}</td>
                                    <td>{{ $products->pricesale }}</td>
                                    <td>{{ $products->created_at }}</td>
                                    <td>{{ $products->updated_at }}</td>
                                    <td>
                                        @if ($products->status == 0)
                                            <p class="text-danger">Đang ở thùng rác</p>
                                        @elseif ($products->status == 1)
                                            <p class="text-success">Hoạt động</p>
                                        @elseif ($products->status == 2)
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
                                                    href="{{ route('admin.product.edit', ['id' => $products->id]) }}">
                                                    <i class="mdi mdi-pencil-outline me-1"></i> Chính sửa
                                                </a>
                                                <a class="dropdown-item waves-effect"
                                                    href="{{ route('admin.product.delete', ['id' => $products->id]) }}">
                                                    <i class="mdi mdi-trash-can-outline me-1"></i> Xóa
                                                </a>
                                                <a class="dropdown-item waves-effect"
                                                    href="{{ route('admin.product.show', ['id' => $products->id]) }}">
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
