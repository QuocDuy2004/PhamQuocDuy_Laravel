@extends('layouts.appadmin')
@section('title', 'Chỉnh sửa thương hiệu')

@section('content')

    <div class="content-wrapper">

        <div class="container-xxl flex-grow-1 container-p-y">

            <h4 class="py-3 mb-4"><span class="text-muted fw-light">@yield('title')</span></h4>

            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <h5 class="card-header">
                            <div class="col-md-12 d-flex justify-content-end">
                                <a class="btn btn-info me-2" href="{{ route('admin.brand.index') }}">Back</a>
                            </div>
                        </h5>
                        <div class="card-body">
                            <form action="{{ route('admin.brand.update', ['id' => $brand->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $brand->name }}" id="name" name="name"
                                        placeholder="Vui lòng điền tên của thương hiệu">
                                    <label for="name">Tên thương hiệu</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control"  value="{{ $brand->slug }}" id="slug" name="slug"
                                        placeholder="Vui lòng điền đường dẫn của thương hiệu">
                                    <label for="slug">Đường dẫn thương hiệu</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control"  value="{{ $brand->sort_order }}" id="sort_order"
                                        name="sort_order" placeholder="Vui lòng điền sắp xếp thương hiệu">
                                    <label for="sort_order">Sắp xếp thương hiệu</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control"  value="{{ $brand->description }}" id="description"
                                        name="description" placeholder="Vui lòng điền mô tả của thương hiệu">
                                    <label for="description">Mô tả thương hiệu</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="file" class="form-control" id="image" name="image"
                                        placeholder="Vui lòng điền ảnh của thương hiệu">
                                    <label for="image">Hình ảnh thương hiệu</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="status" id="status">
                                        <option class="text-success" value="1">Hoạt động</option>
                                        <option class="text-warning" value="2">Ngưng hoạt động</option>
                                    </select>
                                    <label for="status">Trạng thái</label>
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Tạo thương hiệu</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    @endsection
