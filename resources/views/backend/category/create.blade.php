@extends('layouts.appadmin')
@section('title', 'Tạo danh mục')

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
                                <a class="btn btn-info me-2" href="{{ route('admin.category.index') }}">Back</a>
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
                            <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Vui lòng điền tên của danh mục">
                                    <label for="name">Tên danh mục</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="slug" name="slug"
                                        placeholder="Vui lòng điền đường dẫn của danh mục">
                                    <label for="slug">Đường dẫn danh mục</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="parent_id" id="parent_id">
                                        <option value="">--Chọn danh mục cha--</option>
                                        <option value="{!!$htmlparentid!!}">{!!$htmlparentid!!}</option>
                                    </select>
                                    <label for="parent_id">Danh mục cha</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="sort_order" id="sort_order">
                                        <option value="">--Chọn ví trí--</option>
                                        <option value="{!!$htmlsortorder!!}">{!!$htmlsortorder!!}</option>
                                    </select>
                                    <label for="sort_order">Sắp xếp</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="description" name="description"
                                        placeholder="Vui lòng điền mô tả của danh mục">
                                    <label for="description">Mô tả danh mục</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="file" class="form-control" id="image" name="image"
                                        placeholder="Vui lòng điền ảnh của danh mục">
                                    <label for="image">Hình ảnh danh mục</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="status" id="status">
                                        <option class="text-success" value="1" selected>Hoạt động</option>
                                        <option class="text-warning" value="2">Ngưng hoạt động</option>
                                    </select>
                                    <label for="status">Trạng thái</label>
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Tạo danh mục</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection
