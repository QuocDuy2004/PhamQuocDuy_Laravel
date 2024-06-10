@extends('layouts.appadmin')
@section('title', 'Chỉnh sửa đề tài')

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
                                <a class="btn btn-info me-2" href="{{ route('admin.topic.index') }}">Back</a>
                            </div>
                        </h5>
                        <div class="card-body">
                            <form action="{{ route('admin.topic.update', ['id' => $topic->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $topic->name }}" id="name"
                                        name="name" placeholder="Vui lòng điền tên của đề tài">
                                    <label for="name">Tên đề tài</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $topic->slug }}" id="slug"
                                        name="slug" placeholder="Vui lòng điền đường dẫn của đề tài">
                                    <label for="slug">Đường dẫn đề tài</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $topic->sort_order }}" id="sort_order"
                                        name="sort_order" placeholder="Vui lòng điền đường dẫn của đề tài">
                                    <label for="sort_order">Sắp xếp đề tài</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $topic->description }}"
                                        id="description" name="description" placeholder="Vui lòng điền mô tả của đề tài">
                                    <label for="description">Mô tả đề tài</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="status" id="status">
                                        <option class="text-success" value="1"
                                            {{ $topic->status == 1 ? 'selected' : '' }}>Hoạt động</option>
                                        <option class="text-warning" value="2"
                                            {{ $topic->status == 2 ? 'selected' : '' }}>Ngưng hoạt động</option>
                                    </select>
                                    <label for="status">Trạng thái</label>
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Cập nhật đề tài</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    @endsection
