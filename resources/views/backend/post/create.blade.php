@extends('layouts.appadmin')
@section('title', 'Tạo bài viết mới')

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
                                <a class="btn btn-info me-2" href="{{ route('admin.post.index') }}">Back</a>
                            </div>
                        </h5>
                        <div class="card-body">
                            <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Vui lòng điền tên của bài viết">
                                    <label for="title">Tên bài viết</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="slug" name="slug"
                                        placeholder="Vui lòng điền đường dẫn của bài viết">
                                    <label for="slug">Đường dẫn bài viết</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <textarea class="form-control" id="detail" name="detail"
                                        placeholder="Vui lòng điền đề tài của bài viết"></textarea>
                                    <label for="detail">Đề tài bài viết</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <textarea class="form-control" id="description" name="description"
                                        placeholder="Vui lòng điền mô tả của bài viết"></textarea>
                                    <label for="description">Mô tả bài viết</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="file" class="form-control" id="image" name="image"
                                        placeholder="Vui lòng điền ảnh của bài viết">
                                    <label for="image">Hình ảnh bài viết</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="type" id="type">
                                        <option value="post">Post</option>
                                        <option value="page">Page</option>
                                    </select>
                                    <label for="type">Kiểu bài viết</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="status" id="status">
                                        <option class="text-success" value="1">Hoạt động</option>
                                        <option class="text-warning" value="2">Ngưng hoạt động</option>
                                    </select>
                                    <label for="status">Trạng thái</label>
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Tạo bài viết</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection
