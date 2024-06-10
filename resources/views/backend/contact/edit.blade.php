@extends('layouts.appadmin')
@section('title', 'Chỉnh sửa liên hệ')

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
                                <a class="btn btn-info me-2" href="{{ route('admin.contact.index') }}">Back</a>
                            </div>
                        </h5>
                        <div class="card-body">
                            <form action="{{ route('admin.contact.update', ['id' => $contact->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $contact->name }}" id="name" name="name" placeholder="Vui lòng điền tên của liên hệ" required>
                                    <label for="name">Tên liên hệ</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="email" class="form-control" value="{{ $contact->email }}" id="email" name="email" placeholder="Vui lòng điền email của liên hệ" required>
                                    <label for="email">Email liên hệ</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $contact->phone }}" id="phone" name="phone" placeholder="Vui lòng điền số điện thoại của liên hệ" required>
                                    <label for="phone">Số điện thoại</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $contact->title }}" id="title" name="title" placeholder="Vui lòng điền tiêu đề của liên hệ" required>
                                    <label for="title">Tiêu đề</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <textarea class="form-control" id="content" name="content" placeholder="Vui lòng điền nội dung của liên hệ" required>{{ $contact->content }}</textarea>
                                    <label for="content">Nội dung</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="status" id="status" required>
                                        <option value="1" {{ $contact->status == 1 ? 'selected' : '' }}>Hoạt động</option>
                                        <option value="2" {{ $contact->status == 2 ? 'selected' : '' }}>Ngưng hoạt động</option>
                                    </select>
                                    <label for="status">Trạng thái</label>
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Cập nhật liên hệ</button>
                            </form>
                            
                        </div>
                    </div>
                </div>

            </div>

        </div>
    @endsection
