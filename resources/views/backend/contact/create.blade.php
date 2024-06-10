@extends('layouts.appadmin')
@section('title', 'Tạo liên hệ')

@section('content')
    <!-- ! Hide app brand if navbar-full -->
    <!-- Content wrapper -->
    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">

            <h4 class="py-3 mb-4"><span class="text-muted fw-light">@yield('title')</span></h4>

            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <h5 class="card-header">
                            <div class="col-md-12 d-flex justify-content-end">
                                <a class="btn btn-info me-2" href="{{ route('admin.contact.index') }}">Back</a>
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
                            <form action="{{ route('admin.contact.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Vui lòng điền tên của liên hệ" required>
                                    <label for="name">Tên liên hệ</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Vui lòng điền email của liên hệ" required>
                                    <label for="email">Email liên hệ</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Vui lòng điền số điện thoại của liên hệ" required>
                                    <label for="phone">Số điện thoại</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Vui lòng điền tiêu đề của liên hệ" required>
                                    <label for="title">Tiêu đề</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <textarea class="form-control" id="content" name="content" placeholder="Vui lòng điền nội dung của liên hệ" required></textarea>
                                    <label for="content">Nội dung</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="status" id="status" required>
                                        <option value="1" selected>Hoạt động</option>
                                        <option value="2">Ngưng hoạt động</option>
                                    </select>
                                    <label for="status">Trạng thái</label>
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Tạo liên hệ</button>
                            </form>
                            

                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection
