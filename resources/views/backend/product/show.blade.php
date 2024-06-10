@extends('layouts.appadmin')
@section('title', 'Chi tiết sản phẩm')

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
                                <th>Ngày Cập Nhật</th>
                                <th>Trạng Thái</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->category_id }}</td>
                                <td>{{ $product->brand_id }}</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" aria-label="Lilian Fuller"
                                            data-bs-original-title="Lilian Fuller">
                                            @if ($product->image == null)
                                                <img src="{{ asset('assets/load.gif') }}" alt="gif"
                                                    class="rounded-circle"
                                                    onclick="showLargeImage('{{ asset('assets/load.gif') }}')">
                                            @else
                                                <img src="{{ asset('assets/images/product/' . $product->image) }}"
                                                    alt="{{ $product->image }}" class="rounded-circle"
                                                    onclick="showLargeImage('{{ asset('assets/images/product/' . $product->image) }}')">
                                            @endif
                                        </li>
                                    </ul>
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->detail }}</td>
                                <td>{{ $product->slug }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->pricesale }}</td>
                                <td>{{ $product->created_at }}</td>
                                <td>{{ $product->updated_at }}</td>
                                <td>
                                    @if ($product->status == 0)
                                        <p class="text-danger">Đang ở thùng rác</p>
                                    @elseif ($product->status == 1)
                                        <p class="text-success">Hoạt động</p>
                                    @elseif ($product->status == 2)
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
