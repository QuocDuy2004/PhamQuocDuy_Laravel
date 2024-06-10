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
                <div class="mb-4">
                    <h5 class="card-header">
                        <div class="col-md-12 d-flex justify-content-end">
                            <a class="btn btn-info me-2" href="{{ route('admin.menu.index') }}">Back</a>
                        </div>
                    </h5>
                </div>
                <div class="col-md-12">
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
                    <form action="{{ route('admin.menu.store') }}" method="post">
                        @csrf
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingPosition">
                                    <a class="d-block" data-toggle="collapse" data-target="#collapsePosition" aria-expanded="true" aria-controls="collapsePosition">
                                        Vị trí xuất hiện
                                    </a>
                                </div>
                                <div id="collapsePosition" class="collapse" aria-labelledby="headingPosition" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <select class="form-control" name="position" id="position">
                                                <option value="0">-- Chọn vị trí --</option>
                                                <option value="mainmenu">Main Menu</option>
                                                <option value="footermenu">Footer Menu</option>
                                            </select>
                                            <label for="position">Vị trí xuất hiện</label>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" name="choosePosition" class="btn btn-success">Chọn vị trí</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                
                            <div class="card">
                                <div class="card-header" id="headingCategory">
                                    <a class="d-block" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="true" aria-controls="collapseCategory">
                                        Danh mục
                                    </a>
                                </div>
                                <div id="collapseCategory" class="collapse" aria-labelledby="headingCategory" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <select class="form-control" name="category" id="category">
                                                <option value="0">-- Chọn danh mục --</option>
                                                @foreach ($list_category as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            <label for="category">Chọn danh mục</label>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" name="createCategory" class="btn btn-success">Thêm danh mục</button>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <!-- end card -->
                            <div class="card">
                                <div class="card-header" id="headingBrand">
                                    <a class="d-block" data-toggle="collapse" data-target="#collapseBrand" aria-expanded="true" aria-controls="collapseBrand">
                                        Thương hiệu
                                    </a>
                                </div>
                                <div id="collapseBrand" class="collapse" aria-labelledby="headingBrand" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <select class="form-control" name="brand" id="brand">
                                                <option value="0">-- Chọn thương hiệu --</option>
                                                @foreach ($list_brand as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                @endforeach
                                            </select>
                                            <label for="brand">Chọn thương hiệu</label>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" name="chooseBrand" class="btn btn-success">Chọn thương hiệu</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- end card -->
                            <div class="card">
                                <div class="card-header" id="headingTopic">
                                    <a class="d-block" data-toggle="collapse" data-target="#collapseTopic" aria-expanded="true" aria-controls="collapseTopic">
                                        Chủ đề
                                    </a>
                                </div>
                                <div id="collapseTopic" class="collapse" aria-labelledby="headingTopic" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <select class="form-control" name="topic" id="topic">
                                                <option value="0">-- Chọn chủ đề --</option>
                                                @foreach ($list_topic as $topic)
                                                    <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                                                @endforeach
                                            </select>
                                            <label for="topic">Chọn chủ đề</label>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" name="createTopic" class="btn btn-success">Thêm chủ đề</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header" id="headingPage">
                                    <a class="d-block" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapsePage">
                                        Trang đơn
                                    </a>
                                </div>
                                <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <select class="form-control" name="page" id="page">
                                                <option value="0">-- Chọn trang đơn --</option>
                                                @foreach ($list_page as $page)
                                                    <option value="{{ $page->id }}">{{ $page->name }}</option>
                                                @endforeach
                                            </select>
                                            <label for="page">Chọn trang đơn</label>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" name="createPage" class="btn btn-success">Thêm trang</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- end card -->
                            <div class="card">
                                <div class="card-header" id="headingCustom">
                                    <a class="d-block" data-toggle="collapse" data-target="#collapseCustom" aria-expanded="true" aria-controls="collapseCustom">
                                        Tùy liên kết
                                    </a>
                                </div>
                                <div id="collapseCustom" class="collapse" aria-labelledby="headingCustom" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="name">Tên menu</label>
                                            <input type="text" value="" name="name" id="name" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="link">Liên kết</label>
                                            <input type="text" value="" name="link" id="link" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" name="createCustom" class="btn btn-success">Thêm custom</input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                            <div class="card">
                                <div class="card-header" id="headingStatus">
                                    <a class="d-block" data-toggle="collapse" data-target="#collapseStatus" aria-expanded="true" aria-controls="collapseStatus">
                                        Trạng thái
                                    </a>
                                </div>
                                <div id="collapseStatus" class="collapse" aria-labelledby="headingStatus" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <select class="form-control" name="status" id="status">
                                                <option value="1" class="text-success" selected>Hoạt động</option>
                                                <option value="2" class="text-warning">Ngưng hoạt động</option>
                                            </select>
                                            <label for="status">Trạng thái</label>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" name="chooseStatus" class="btn btn-success">Chọn trạng thái</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        var accordionItems = document.querySelectorAll('.card-header a');
                
                        accordionItems.forEach(function (item) {
                            item.addEventListener('click', function (event) {
                                event.preventDefault();
                                var target = document.querySelector(this.dataset.target);
                                var isExpanded = this.getAttribute('aria-expanded') === 'true';
                
                                if (isExpanded) {
                                    target.classList.remove('show');
                                    this.setAttribute('aria-expanded', 'false');
                                } else {
                                    document.querySelectorAll('.collapse.show').forEach(function (collapse) {
                                        collapse.classList.remove('show');
                                    });
                
                                    document.querySelectorAll('.card-header a').forEach(function (link) {
                                        link.setAttribute('aria-expanded', 'false');
                                    });
                
                                    target.classList.add('show');
                                    this.setAttribute('aria-expanded', 'true');
                                }
                            });
                        });
                    });
                </script>
                
                {{-- <div class="col-xl">
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
                                    <select class="form-control" name="position" id="position">
                                        <option value="0">-- Chọn vị trí --</option>
                                        <option value="mainmenu">Main Menu</option>
                                        <option value="footermenu">Footer Menu</option>
                                    </select>
                                    <label for="position">Vị trí xuất hiện</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control">
                                        <option value="">-- Chọn danh mục --</option>
                                        @foreach ($list_category as $category)
                                            <option name="categoryid[{{ $category->id }}]"
                                                id="categoryid_{{ $category->id }}" value="{{ $category->id }}">
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="categoryid_{{ $category->id }}">Danh mục</label>
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
                </div> --}}
            </div>

        </div>
    @endsection
