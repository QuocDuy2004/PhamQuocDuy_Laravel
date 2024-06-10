@extends('layouts.appadmin')
@section('title', 'Chỉnh sửa Menu')

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
                                <a class="btn btn-info me-2" href="{{ route('admin.menu.index') }}">Back</a>
                            </div>
                        </h5>
                        <div class="card-body">
                            <form action="{{ route('admin.menu.update', ['id' => $menu->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $menu->name }}" id="name" name="name"
                                        placeholder="Vui lòng điền tên của Menu">
                                    <label for="name">Tên Menu</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $menu->link }}" id="link" name="link"
                                        placeholder="Vui lòng điền đường dẫn của Menu">
                                    <label for="link">Đường dẫn Menu</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="parent_id" id="parent_id">
                                        <option value="0">{{ $menu->parent_id }} - {{ $menu->name }}</option>
                                        @foreach ($menus as $danhmucha)
                                            <option value="{{ $danhmucha->parent_id }} - {{ $danhmucha->name }}">{{ $danhmucha->parent_id }} - {{ $danhmucha->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="parent_id">Danh mục Cha</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="number" class="form-control" value="{{ $menu->sort_order }}" id="sort_order" name="sort_order"
                                        placeholder="Vui lòng nhập số thứ tự sắp xếp">
                                    <label for="sort_order">Sắp Xếp</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $menu->type }}" id="type" name="type"
                                        placeholder="Vui lòng điền kiểu của Menu">
                                    <label for="type">Kiểu Menu</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $menu->position }}" id="position" name="position"
                                        placeholder="Vui lòng điền chức vụ của Menu">
                                    <label for="position">Chức Vụ Menu</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $menu->table_id }}" id="table_id" name="table_id"
                                        placeholder="Vui lòng chọn bảng của Menu">
                                    <label for="table_id">Bảng Menu</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" value="{{ $menu->status }}" name="status" id="status">
                                        <option class="text-success" value="" selected>
                                            @if ($menu->status==1)
                                                <p class="text-success">Hoạt động</p>
                                            @else
                                                <p class="text-warning">Ngưng hoạt động</p>
                                            @endif
                                        </option>
                                        <option class="text-success" value="1">Hoạt động</option>
                                        <option class="text-warning" value="2">Ngưng hoạt động</option>
                                    </select>
                                    <label for="status">Trạng thái</label>
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Cập nhật thực đơn</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    @endsection
