@extends('layouts.appadmin')
@section('title', 'Quản lý menu')

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">@yield('title')</span></h4>

            <div class="card">
                <h5 class="card-header">
                    <div class="col-md-12 d-flex justify-content-end">
                        <a class="btn btn-success me-2" href="{{ route('admin.menu.create') }}">Tạo menu</a>
                        <a class="btn btn-danger" href="{{ route('admin.menu.trash') }}">Thùng Rác</a>
                    </div>
                </h5>
                @if (session('success'))
                    <script>
                        showSuccessMessage('{{ session('success') }}');
                    </script>
                @endif

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Đường Dẫn</th>
                                <th>Thứ Tự</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($list as $menu)
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>{{ $menu->id }}</td>
                                    <td>{{ $menu->name }}</td>
                                    <td>{{ $menu->link }}</td>
                                    <td>{{ $menu->sort_order }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination links -->
                    <div class="d-flex justify-content-end">
                        {{ $list->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
