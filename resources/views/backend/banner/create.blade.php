@extends('layouts.appadmin')
@section('title', 'Chỉnh ngọn cờ')

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
                            <form action="{{ route('admin.banner.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="" id="name" name="name"
                                        placeholder="Vui lòng điền tên của thể loại">
                                    <label for="name">Tên thể loại</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="" id="link" name="link"
                                        placeholder="Vui lòng điền đường dẫn của thể loại">
                                    <label for="link">Đường dẫn thể loại</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="" id="position" name="position"
                                        placeholder="Vui lòng điền chúc vụ của thể loại">
                                    <label for="position">Chức vụ thể loại</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="" id="description"
                                        name="description" placeholder="Vui lòng điền mô tả của thể loại">
                                    <label for="description">Mô tả thể loại</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="file" class="form-control" id="image" name="image"
                                        placeholder="Vui lòng điền ảnh của thể loại">
                                    <label for="image">Hình ảnh thể loại</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="status" id="status">
                                        <option class="text-success" value="1">Hoạt động</option>
                                        <option class="text-warning" value="2">Ngưng hoạt động</option>
                                    </select>
                                    <label for="status">Trạng thái</label>
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Tạo banner</button>
                            </form>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    @endsection
