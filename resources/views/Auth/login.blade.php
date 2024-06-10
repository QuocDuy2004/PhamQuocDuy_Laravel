@extends('layouts.app')
@section('title', 'Đăng nhập')
@section('content')
    <div class="bodywrap">
        <section class="bread-crumb"
            style="background: linear-gradient(0deg, rgba(0,0,0,0.8), rgba(0,0,0,0.3)),  url(//bizweb.dktcdn.net/100/487/743/themes/912230/assets/breadcrumb.jpg?1710378319730) no-repeat center;">

            <div class="container">
                <div class="title-bread-crumb">
                    Đăng nhập tài khoản
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
                    <li><strong><span>Đăng nhập tài khoản</span></strong></li>
                </ul>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="wrap_background_aside page_login">
                    <div class="row">
                        <div style="margin: auto;"
                            class="col-lg-4 col-md-6 col-sm-12 col-12 col-xl-4 offset-xl-4 offset-lg-4 offset-md-3 offset-xl-3 ">
                            <div class="row no-margin align-items-center" style="background: #fff;border-radius: 5px;">
                                <div class="page-login pagecustome clearfix no-padding">
                                    <div class="wpx">
                                        <ul class="auth-block__menu-list">
                                            <li class="active">
                                                <a href="{{ route('login') }}" title="Đăng nhập">Đăng nhập</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('register') }}" title="Đăng ký">Đăng ký</a>
                                            </li>
                                        </ul>
                                        <h1 class="title_heads a-center"><span>Đăng nhập</span></h1>
                                        <div id="login" class="section">

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
                                                <script>
                                                    setTimeout(function() {
                                                        window.location.href = "{{ route('home') }}";
                                                    }, 3000);
                                                </script>
                                            @endif


                                            <form method="post" action="{{ route('login.post') }}">
                                                @csrf
                                                <input name="FormType" type="hidden" value="customer_login"><input
                                                    name="utf8" type="hidden" value="true">
                                                <span class="form-signup" style="color:red;">

                                                </span>
                                                <div class="form-signup clearfix">
                                                    <fieldset class="form-group">
                                                        <input type="email"
                                                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                                            class="form-control form-control-lg" value=""
                                                            name="email" id="customer_email" placeholder="Email"
                                                            required="">
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <div style="position: relative;">
                                                            <input type="password" class="form-control form-control-lg"
                                                                value="" name="password" id="customer_password"
                                                                placeholder="Mật khẩu" required="">
                                                            <span id="eye-icon"
                                                                style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10"
                                                                    viewBox="0 0 20 20" fill="currentColor">
                                                                    <path
                                                                        d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z"
                                                                        clip-rule="evenodd"></path>
                                                                    <path
                                                                        d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </fieldset>


                                                    <div class="text-end">
                                                        <label for="remember">
                                                            Ghi nhớ <input type="checkbox" id="remember">
                                                        </label>
                                                    </div>
                                                    <div class="pull-xs-left">
                                                        <input class="btn btn-style btn_50" type="submit"
                                                            value="Đăng nhập">
                                                        <span class="block a-center quenmk">Quên mật khẩu</span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="h_recover" style="display:none;">
                                            <div id="recover-password" class="form-signup page-login">
                                                <form method="post" action="{{ route('forgot.password.post') }}"
                                                    accept-charset="UTF-8">
                                                    @csrf
                                                    <div class="form-signup" style="color: red;">
                                                        @if ($errors->any())
                                                            <div class="alert alert-danger">
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-signup clearfix">
                                                        <fieldset class="form-group">
                                                            <input type="email"
                                                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                                                class="form-control form-control-lg"
                                                                value="{{ old('email') }}" name="email"
                                                                id="recover-email" placeholder="Email" required="">
                                                        </fieldset>
                                                    </div>
                                                    <div class="action_bottom">
                                                        <input class="btn btn-style btn_50" style="margin-top: 0px;"
                                                            type="submit" value="Lấy lại mật khẩu">
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <div class="block social-login--facebooks">
                                            <p class="a-center">
                                                Hoặc đăng nhập bằng
                                            </p>
                                            <a href="{{ route('login.facebook') }}" class="social-login--facebook"><img
                                                    width="129px" height="37px" alt="facebook-login-button"
                                                    src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a>
                                            <a href="{{ route('login.google') }}" class="social-login--google"><img
                                                    width="129px" height="37px" alt="google-login-button"
                                                    src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <script type="text/javascript">
            function showRecoverPasswordForm() {
                document.getElementById('recover-password').style.display = 'block';
                document.getElementById('login').style.display = 'none';
            }

            function hideRecoverPasswordForm() {
                document.getElementById('recover-password').style.display = 'none';
                document.getElementById('login').style.display = 'block';
            }

            $('.quenmk').on('click', function() {
                $('#login').toggleClass('hidden');
                $('.h_recover').slideToggle();
            });
        </script>
        <script>
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    document.getElementById('latitude').value = position.coords.latitude;
                    document.getElementById('longitude').value = position.coords.longitude;
                });
            }
        </script>
    </div>

@endsection
