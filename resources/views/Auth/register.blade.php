@extends('layouts.app')
@section('title', 'Đăng ký')
@section('content')
    <div class="bodywrap">
        <section class="bread-crumb"
            style="background: linear-gradient(0deg, rgba(0,0,0,0.8), rgba(0,0,0,0.3)),  url(//bizweb.dktcdn.net/100/487/743/themes/912230/assets/breadcrumb.jpg?1710378319730) no-repeat center;">

            <div class="container">
                <div class="title-bread-crumb">

                    Đăng ký tài khoản

                </div>
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="/"><span>Trang chủ</span></a>
                        <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                                <path fill="currentColor"
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                    class=""></path>
                            </svg>&nbsp;</span>
                    </li>

                    <li><strong><span>Đăng ký tài khoản</span></strong></li>

                </ul>
            </div>
        </section>
        <section class="section">
            <div class="container ">
                <div class="wrap_background_aside  page_login">
                    <div class="wrap_background_aside">
                        <div class="row">
                            <div style="    margin: auto;"
                                class="col-lg-4 col-md-6 col-sm-12 col-12 col-xl-4 offset-xl-4 offset-lg-4 offset-md-3 offset-xl-3">
                                <div class="row no-margin align-items-center" style="background: #fff;border-radius: 5px;">
                                    <div class=" page-login pagecustome clearfix no-padding">
                                        <div class="wpx">

                                            <ul class="auth-block__menu-list">
                                                <li>
                                                    <a href="{{ route('login') }}" title="Đăng nhập">Đăng nhập</a>
                                                </li>
                                                <li class="active">
                                                    <a href="{{ route('register') }}" title="Đăng ký">Đăng ký</a>
                                                </li>
                                            </ul>
                                            <h1 class="title_heads a-center"><span>Đăng ký</span></h1>
                                            <div id="login" class="section">
                                            @if (Session::has('error'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ Session::get('error') }}
                                                </div>
                                            @endif
                                            
                                            @if (Session::has('success'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ Session::get('success') }}
                                                </div>
                                            @endif
                                                <form action="{{ route('register.post') }}" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input type="text" name="name" class="form-control"
                                                                value="{{ old('name') }}" placeholder="Họ và tên"
                                                                required>
                                                            <label for="">Họ và tên</label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input type="email" name="email" class="form-control"
                                                                value="{{ old('email') }}" placeholder="Email" required>
                                                            <label for="">Địa chỉ Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input type="phone" name="phone" class="form-control"
                                                                value="{{ old('phone') }}" placeholder="Phone" required>
                                                            <label for="">Số điện thoại</label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input type="text" name="username" class="form-control"
                                                                value="{{ old('username') }}" placeholder="Username"
                                                                required>
                                                            <label for="">Tài khoản</label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input type="password" name="password" class="form-control"
                                                                placeholder="Password" required>
                                                            <label for="">Mật khẩu</label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input type="password" name="password_confirmation"
                                                                class="form-control" placeholder="Confirm Password"
                                                                required>
                                                            <label for="">Nhập lại mật khẩu</label>
                                                        </div>
                                                    </div>
                                                    <button class="btn m-main w-100">ĐĂNG KÝ TÀI KHOẢN</button>
                                                    <div class="text-center font-weight-bold p-2">hoặc</div>
                                                    <a href="{{ route('login') }}"
                                                        class="btn btn-success btn-outline-success w-100">ĐĂNG NHẬP TẠI
                                                        ĐÂY</a>
                                                </form>


                                                <div class="block social-login--facebooks margin-top-15">
                                                    <p class="a-center">
                                                        Hoặc đăng nhập bằng
                                                    </p>
                                                    <script>
                                                        function loginFacebook() {
                                                            var a = {
                                                                    client_id: "947410958642584",
                                                                    redirect_uri: "https://store.mysapo.net/account/facebook_account_callback",
                                                                    state: JSON.stringify({
                                                                        redirect_url: window.location.href
                                                                    }),
                                                                    scope: "email",
                                                                    response_type: "code"
                                                                },
                                                                b = "https://www.facebook.com/v3.2/dialog/oauth" + encodeURIParams(a, !0);
                                                            window.location.href = b
                                                        }

                                                        function loginGoogle() {
                                                            var a = {
                                                                    client_id: "997675985899-pu3vhvc2rngfcuqgh5ddgt7mpibgrasr.apps.googleusercontent.com",
                                                                    redirect_uri: "https://store.mysapo.net/account/google_account_callback",
                                                                    scope: "email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",
                                                                    access_type: "online",
                                                                    state: JSON.stringify({
                                                                        redirect_url: window.location.href
                                                                    }),
                                                                    response_type: "code"
                                                                },
                                                                b = "https://accounts.google.com/o/oauth2/v2/auth" + encodeURIParams(a, !0);
                                                            window.location.href = b
                                                        }

                                                        function encodeURIParams(a, b) {
                                                            var c = [];
                                                            for (var d in a)
                                                                if (a.hasOwnProperty(d)) {
                                                                    var e = a[d];
                                                                    null != e && c.push(encodeURIComponent(d) + "=" + encodeURIComponent(e))
                                                                } return 0 == c.length ? "" : (b ? "?" : "") + c.join("&")
                                                        }
                                                    </script>
                                                    <a href="javascript:void(0)" class="social-login--facebook"
                                                        onclick="loginFacebook()"><img width="129px" height="37px"
                                                            alt="facebook-login-button"
                                                            src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a>
                                                    <a href="javascript:void(0)" class="social-login--google"
                                                        onclick="loginGoogle()"><img width="129px" height="37px"
                                                            alt="google-login-button"
                                                            src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
