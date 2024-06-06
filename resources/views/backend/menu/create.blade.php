@extends('layouts.appadmin')
@section('title', 'Tạo Menu')

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
                                <a class="btn btn-info me-2" href="{{ route('admin.product.index') }}">Back</a>
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
                            <form action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Vui lòng điền tên của Menu">
                                    <label for="name">Tên Menu</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="link" name="link"
                                        placeholder="Vui lòng điền đường dẫn của Menu">
                                    <label for="link">Đường dẫn Menu</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="parent_id" id="parent_id">
                                        <option value="0">-- Chọn danh mục cha --</option>
                                        @foreach ($menus as $danhmucha)
                                            <option value="">{{ $danhmucha->parent_id }} - {{ $danhmucha->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="parent_id">Danh mục Cha</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="number" class="form-control" id="sort_order" name="sort_order"
                                        placeholder="Vui lòng nhập số thứ tự sắp xếp">
                                    <label for="sort_order">Sắp Xếp</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="type" name="type"
                                        placeholder="Vui lòng điền kiểu của Menu">
                                    <label for="type">Kiểu Menu</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="position" name="position"
                                        placeholder="Vui lòng điền chức vụ của Menu">
                                    <label for="position">Chức Vụ Menu</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="table_id" name="table_id"
                                        placeholder="Vui lòng chọn bảng của Menu">
                                    <label for="table_id">Bảng Menu</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="status" id="status">
                                        <option class="text-success" value="1" selected>Hoạt động</option>
                                        <option class="text-warning" value="2">Ngưng hoạt động</option>
                                    </select>
                                    <label for="status">Trạng thái</label>
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Tạo Menu</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection
