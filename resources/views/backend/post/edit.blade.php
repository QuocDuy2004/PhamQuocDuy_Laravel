@extends('layouts.appadmin')
@section('title', 'Chỉnh sửa bài viết')

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
                            <form action="{{ route('admin.post.update', ['id' => $post->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $post->title }}" id="title"
                                        name="title" placeholder="Vui lòng điền tên của bài viết">
                                    <label for="title">Tên bài viết</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $post->slug }}" id="slug"
                                        name="slug" placeholder="Vui lòng điền đường dẫn của bài viết">
                                    <label for="slug">Đường dẫn bài viết</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $post->detail }}" id="detail"
                                        name="detail" placeholder="Vui lòng điền đề tài của bài viết">
                                    <label for="detail">Đề tài bài viết</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $post->description }}"
                                        id="description" name="description" placeholder="Vui lòng điền mô tả của bài viết">
                                    <label for="description">Mô tả bài viết</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="file" class="form-control" id="image"
                                        name="image" placeholder="Vui lòng điền ảnh của bài viết">
                                    <label for="image">Hình ảnh bài viết</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $post->type }}" id="type"
                                        name="type" placeholder="Vui lòng điền kiểu bài viết">
                                    <label for="type">Kiểu</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="status" id="status">
                                        <option class="text-success" value="1"
                                            {{ $post->status == 1 ? 'selected' : '' }}>Hoạt động</option>
                                        <option class="text-warning" value="2"
                                            {{ $post->status == 2 ? 'selected' : '' }}>Ngưng hoạt động</option>
                                    </select>
                                    <label for="status">Trạng thái</label>
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Cập nhật bài
                                    viết</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    @endsection
