@extends('layouts.appadmin')
@section('title', 'Chỉnh sửa đơn hàng')

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
                                <a class="btn btn-info me-2" href="{{ route('admin.order.index') }}">Back</a>
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
                            <form action="{{ route('admin.order.update', ['id' => $order->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $order->user_id }}" id="user_id" name="user_id"
                                        placeholder="Vui lòng điền mã người dùng">
                                    <label for="user_id">ID Người dùng</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $order->delivery_name }}" id="delivery_name" name="delivery_name"
                                        placeholder="Vui lòng điền tên của đơn hàng">
                                    <label for="delivery_name">Tên đơn hàng</label>
                                </div>
                                
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $order->delivery_gender }}" id="delivery_gender" name="delivery_gender"
                                        placeholder="Vui lòng điền giới tính người mua đơn hàng">
                                    <label for="delivery_gender">Giới tính người mua đơn hàng</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="email" class="form-control" value="{{ $order->delivery_email }}" id="delivery_email" name="delivery_email"
                                        placeholder="Vui lòng điền email người mua đơn hàng">
                                    <label for="delivery_email">Email người mua đơn hàng</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="phone" class="form-control" value="{{ $order->delivery_phone }}" id="delivery_phone" name="delivery_phone"
                                        placeholder="Vui lòng điền số điện thoại người mua đơn hàng">
                                    <label for="delivery_phone">Số điện thoại người mua đơn hàng</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $order->delivery_address }}" id="delivery_address" name="delivery_address"
                                        placeholder="Vui lòng điền địa chỉ giao đơn hàng">
                                    <label for="delivery_address">Địa chỉ giao đơn hàng</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $order->type }}" id="type" name="type"
                                        placeholder="Vui lòng điền loại đơn hàng">
                                    <label for="type">Loại đơn hàng</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" value="{{ $order->note }}" id="note" name="note"
                                        placeholder="Vui lòng điền ghi chú đơn hàng">
                                    <label for="note">Ghi chú đơn hàng</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="status" id="status">
                                        <option class="text-success" value="1" selected>Hoạt động</option>
                                        <option class="text-warning" value="2">Ngưng hoạt động</option>
                                    </select>
                                    <label for="status">Trạng thái</label>
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Cập nhật sản
                                    phẩm</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    @endsection
