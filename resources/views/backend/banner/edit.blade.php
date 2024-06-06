@extends('layouts.appadmin')
@section('title', 'Chỉnh sửa ngọn cờ')

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
                                <a class="btn btn-info me-2" href="{{ route('admin.banner.index') }}">Back</a>
                            </div>
                        </h5>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="{{ route('admin.banner.update', ['id' => $banner->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $banner->name }}" id="name"
                                        name="name" placeholder="Vui lòng điền tên của ngọn cờ">
                                    <label for="name">Tên ngọn cờ</label>
                                </div>
                                
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $banner->link }}" id="link"
                                        name="link" placeholder="Vui lòng điền đường dẫn của ngọn cờ">
                                    <label for="slug">Đường dẫn ngọn cờ</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $banner->description }}"
                                        id="description" name="description" placeholder="Vui lòng điền mô tả của ngọn cờ">
                                    <label for="description">Mô tả ngọn cờ</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $banner->position }}"
                                        id="position" name="position" placeholder="Vui lòng điền chúc vụ của ngọn cờ">
                                    <label for="position">Chúc vụ</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="file" class="form-control" id="image" name="image"
                                        placeholder="Vui lòng điền ảnh của ngọn cờ">
                                    <label for="image">Hình ảnh ngọn cờ</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="status" id="status">
                                        <option class="text-success" value="1"
                                            {{ $banner->status == 1 ? 'selected' : '' }}>Hoạt động</option>
                                        <option class="text-warning" value="2"
                                            {{ $banner->status == 2 ? 'selected' : '' }}>Ngưng hoạt động</option>
                                    </select>
                                    <label for="status">Trạng thái</label>
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Cập nhật ngọn cờ</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    @endsection
