@extends('layouts.appadmin')
@section('title', 'Chỉnh sửa sản phẩm')

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
                                <a class="btn btn-info me-2" href="{{ route('admin.product.index') }}">Back</a>
                            </div>
                        </h5>
                        <div class="card-body">
                            <form action="{{ route('admin.product.update', ['id' => $product->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $product->name }}" id="name"
                                        name="name" placeholder="Vui lòng điền tên của sản phẩm">
                                    <label for="name">Tên sản phẩm</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="category_id" id="category_id">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="category_id">Loại</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="brand_id" id="brand_id">
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}"
                                                {{ $brand->id == $product->brand_id ? 'selected' : '' }}>
                                                {{ $brand->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="brand_id">Thương hiệu</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $product->slug }}" id="slug"
                                        name="slug" placeholder="Vui lòng điền đường dẫn của sản phẩm">
                                    <label for="slug">Đường dẫn sản phẩm</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $product->detail }}"
                                        id="detail" name="detail" placeholder="Vui lòng điền đề tài của sản phẩm">
                                    <label for="detail">Đề tài sản phẩm</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $product->description }}"
                                        id="description" name="description" placeholder="Vui lòng điền mô tả của sản phẩm">
                                    <label for="description">Mô tả sản phẩm</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="file" class="form-control" id="image" name="image"
                                        placeholder="Vui lòng điền ảnh của sản phẩm">
                                    <label for="image">Hình ảnh sản phẩm</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $product->price }}" id="price"
                                        name="price" placeholder="Vui lòng điền giá của sản phẩm">
                                    <label for="price">Giá sản phẩm</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $product->pricesale }}"
                                        id="pricesale" name="pricesale" placeholder="Vui lòng điền giá giảm của sản phẩm">
                                    <label for="pricesale">Discount sản phẩm</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="status" id="status">
                                        <option class="text-success" value="1"
                                            {{ $product->status == 1 ? 'selected' : '' }}>Hoạt động</option>
                                        <option class="text-warning" value="2"
                                            {{ $product->status == 2 ? 'selected' : '' }}>Ngưng hoạt động</option>
                                    </select>
                                    <label for="status">Trạng thái</label>
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Cập nhật sản
                                    phẩm</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    @endsection
