@extends('layouts.appadmin')
@section('title', 'Tạo thành viên')

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
                                <a class="btn btn-info me-2" href="{{ route('admin.user.index') }}">Back</a>
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
                            <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Vui lòng điền tên của thành viên" required>
                                    <label for="name">Tên thành viên</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Vui lòng điền email của thành viên" required>
                                    <label for="email">Email thành viên</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        placeholder="Vui lòng điền số điện thoại của thành viên" required>
                                    <label for="phone">Số điện thoại thành viên</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="username" name="username"
                                        placeholder="Vui lòng điền username của thành viên" required>
                                    <label for="username">Username thành viên</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4" style="position: relative;">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Vui lòng điền mật khẩu của thành viên" required>
                                    <label for="password">Mật khẩu thành viên</label>
                                    <span id="toggle-password"
                                        style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                                        <i class="mdi mdi-eye"></i>
                                    </span>
                                </div>
                                <div class="form-floating form-floating-outline mb-4" style="position: relative;">
                                    <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation" placeholder="Vui lòng điền mật khẩu của thành viên"
                                        required>
                                    <label for="password_confirmation">Nhập lại mật khẩu thành viên</label>
                                    <span id="toggle-password1"
                                        style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                                        <i class="mdi mdi-eye"></i>
                                    </span>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="gender" id="gender" required>
                                        <option value="1">Nam</option>
                                        <option value="2">Nữ</option>
                                        <option value="3">Khác</option>
                                    </select>
                                    <label for="gender">Giới tính thành viên</label>
                                </div>
                                <!--Chọn địa chỉ-->
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="city" id="city" required>
                                        <option value="" selected>Chọn tỉnh thành</option>
                                        <!-- Populate options here -->
                                    </select>
                                    <label for="city">Tỉnh thành</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="district" id="district" required>
                                        <option value="" selected>Chọn quận huyện</option>
                                        <!-- Populate options here -->
                                    </select>
                                    <label for="district">Quận huyện</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="ward" id="ward" required>
                                        <option value="" selected>Chọn phường xã</option>
                                        <!-- Populate options here -->
                                    </select>
                                    <label for="ward">Phường xã</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="file" class="form-control" id="image" name="image" required>
                                    <label for="image">Hình ảnh thành viên</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="roles" id="roles" required>
                                        <option value="customer">Khách hàng</option>
                                        <option value="admin">Quản trị viên</option>
                                    </select>
                                    <label for="roles">Vai trò thành viên</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-control" name="status" id="status" required>
                                        <option class="text-success" value="1" selected>Hoạt động</option>
                                        <option class="text-warning" value="2">Ngưng hoạt động</option>
                                    </select>
                                    <label for="status">Trạng thái</label>
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Tạo thành
                                    viên</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.getElementById('toggle-password').addEventListener('click', function() {
                var passwordField = document.getElementById('password');
                var passwordFieldType = passwordField.getAttribute('type');
                if (passwordFieldType === 'password') {
                    passwordField.setAttribute('type', 'text');
                    this.innerHTML = '<i class="mdi mdi-eye-off-outline"></i>';
                } else {
                    passwordField.setAttribute('type', 'password');
                    this.innerHTML = '<i class="mdi mdi-eye"></i>';
                }
            });

            document.getElementById('toggle-password1').addEventListener('click', function() {
                var confirmPasswordField = document.getElementById('password_confirmation');
                var confirmPasswordFieldType = confirmPasswordField.getAttribute('type');
                if (confirmPasswordFieldType === 'password') {
                    confirmPasswordField.setAttribute('type', 'text');
                    this.innerHTML = '<i class="mdi mdi-eye-off-outline"></i>';
                } else {
                    confirmPasswordField.setAttribute('type', 'password');
                    this.innerHTML = '<i class="mdi mdi-eye"></i>';
                }
            });
        </script>

        <!--Chọn địa chỉ-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
        <script>
            var citis = document.getElementById("city");
            var districts = document.getElementById("district");
            var wards = document.getElementById("ward");
            var Parameter = {
                url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
                method: "GET",
                responseType: "application/json",
            };
            var promise = axios(Parameter);
            promise.then(function(result) {
                renderCity(result.data);
            });

            function renderCity(data) {
                for (const x of data) {
                    citis.options[citis.options.length] = new Option(x.Name, x.Name);
                }
                citis.onchange = function() {
                    districts.length = 1;
                    wards.length = 1;
                    if (this.value != "") {
                        const result = data.filter(n => n.Name === this.value);
                        for (const k of result[0].Districts) {
                            districts.options[districts.options.length] = new Option(k.Name, k.Name);
                        }
                    }
                };
                districts.onchange = function() {
                    wards.length = 1;
                    const dataCity = data.filter((n) => n.Name === citis.value);
                    if (this.value != "") {
                        const dataWards = dataCity[0].Districts.filter(n => n.Name === this.value)[0].Wards;
                        for (const w of dataWards) {
                            wards.options[wards.options.length] = new Option(w.Name, w.Name);
                        }
                    }
                };
            }
        </script>
    @endsection
