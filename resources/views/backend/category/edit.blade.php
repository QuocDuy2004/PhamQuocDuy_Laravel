@extends('layouts.appadmin')
@section('title', 'Chỉnh sửa danh mục')

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
                                <a class="btn btn-info me-2" href="{{ route('admin.category.index') }}">Back</a>
                            </div>
                        </h5>
                        <div class="card-body">
                            <form action="{{ route('admin.category.update', ['id' => $category->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $category->name }}" id="name"
                                        name="name" placeholder="Vui lòng điền tên của danh mục">
                                    <label for="name">Tên danh mục</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="parent_id" id="parent_id">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                    </select>
                                    <label for="parent_id">Danh mục Cha</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="sort_order" id="sort_order">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                </select>
                                    <label for="sort_order">Sắp sếp</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $category->slug }}" id="slug"
                                        name="slug" placeholder="Vui lòng điền đường dẫn của danh mục">
                                    <label for="slug">Đường dẫn danh mục</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $category->description }}"
                                        id="description" name="description" placeholder="Vui lòng điền mô tả của danh mục">
                                    <label for="description">Mô tả danh mục</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="file" class="form-control" id="image" name="image"
                                        placeholder="Vui lòng điền ảnh của danh mục">
                                    <label for="image">Hình ảnh danh mục</label>
                                </div>  
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="status" id="status">
                                        <option class="text-success" value="1"
                                            {{ $category->status == 1 ? 'selected' : '' }}>Hoạt động</option>
                                        <option class="text-warning" value="2"
                                            {{ $category->status == 2 ? 'selected' : '' }}>Ngưng hoạt động</option>
                                    </select>
                                    <label for="status">Trạng thái</label>
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Cập nhật thẻ loại</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    @endsection
