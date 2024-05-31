@extends('layouts.app')

@section('content')
    <div class="bodywrap">
        <section class="bread-crumb"
            style="background: linear-gradient(0deg, rgba(0,0,0,0.8), rgba(0,0,0,0.3)),  url(//bizweb.dktcdn.net/100/487/743/themes/912230/assets/breadcrumb.jpg?1710378319730) no-repeat center;">

            <div class="container">
                <div class="title-bread-crumb">

                    Liên hệ

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

                    <li><strong><span>Liên hệ</span></strong></li>

                </ul>
            </div>
        </section>
        <h1 class="title-head-contact a-left d-none">Liên hệ</h1>
        <div class="layout-contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="contact block-background">
                            <h4>

                                <img alt="title"
                                    src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/wristwatch.png?1710378319730">
                                <span>Cửa hàng Dola Watch</span>
                            </h4>
                            <div class="info-contact">
                                <div class="group-address">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="info">
                                                <b>Địa chỉ</b>
                                                <span>

                                                    @foreach ($users as $user)
                                                        @if ($user->roles == 'admin')
                                                            {{ $user->address }}
                                                        @endif
                                                    @endforeach


                                                </span>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M256 512C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256s-114.6 256-256 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="info">
                                                <b>Thời gian làm việc</b>
                                                <span>
                                                    8h - 22h<br>
                                                    Từ thứ 2 đến chủ nhật
                                                </span>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="info">
                                                <b>Hotline</b>

                                                <a title="{{ $contacts->phone }}" href="tel:{{ $contacts->phone }}">
                                                    <p>{{ $contacts->phone }}</p>
                                                </a>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="info">
                                                <b>Email</b>
                                                <a title="{{ $contacts->email }}"
                                                    href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a>
                                            </div>
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="form-contact block-background">
                            <h4>
                                <img alt="title"
                                    src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/wristwatch.png?1710378319730">
                                <span>Liên hệ với chúng tôi</span>

                            </h4>
                            <span class="content-form">
                                Nếu bạn có thắc mắc gì, có thể gửi yêu cầu cho chúng tôi, và chúng tôi sẽ liên lạc lại với
                                bạn sớm nhất có thể .
                            </span>
                            <div id="pagelogin">
                                <form method="post" action="/postcontact" id="contact" accept-charset="UTF-8"><input
                                        name="FormType" type="hidden" value="contact"><input name="utf8" type="hidden"
                                        value="true"><input type="hidden" id="Token-41ec3de1923a4cd9ac2718463012b3e8"
                                        name="Token"
                                        value="03AFcWeA7kB2OYzs6xwgUW_wPmBR8Edq8ockC_LiVPBx0aZHr9r0iCGccuF08ZQkRmfLSktzm6rz9H2nigb0Szdp7pQEuy7dY1A2Xa-pbRs5dm8M73YECySbjPTShTAmThK00WbiQqhFd-SZHf2tJtVoh0PKy7Snv-WRuJS8yy861DiVNtaxBkcrIs3Jum1nz4Xl5Mq_OYkskwGEwgbs0iixGjk5YaH1_hsuo4i2tAAUTv1yscQIxK5VfEWuS-x2hwjcN9MT-jRYRRyXZ0kGOMo_0bDp7BWH1hjIAUpm6mKCfQF7RUnKMfG3PWh-ObHnZ4cJUf5UuV_BP64Asxvdqh-nOAfPF7AfVyifRIHJyoNWcngB-_e-4iBwJttx9QFw4wYXJDPE3Fhg5kJi_ItY3sBw-q32ADhhJ2yLx4AH-WYFxwnqMiaH9h5SwPNkg7LBwyzoFKRVeWIVVg9cdKHbJ0UKLzfFQ62Vrr45eehF1Hdo-AEHBhvbQpgY6x1-cUjQnWukCLapkNvTS-ogG3pc9q7vOn6iT4tD1iyrVumVI6zasY0efKq4A7ERjldbvnZxPt-QDXT4w48EW_n2x_S2Z3ESOg-e0Rmpod0yNkQLB-k8mE3HYXCE8xMs24hQuE6dRA4ygnGjzCdJY8galhhwyHtLA_y0OMn-Wwpz9Izd7gMO40cYPrL_JXMdtnyZjPbs9y9XmmWA2HROUCVAoHgdyEwJwO_KP8ijXk0vl95PHmzgJaZAMZl6mds_c">
                                    <script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script>
                                    <script>
                                        grecaptcha.ready(function() {
                                            grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {
                                                action: "contact"
                                            }).then(function(token) {
                                                document.getElementById("Token-41ec3de1923a4cd9ac2718463012b3e8").value = token
                                            });
                                        });
                                    </script>


                                    <div class="group_contact">
                                        <input placeholder="Họ và tên" type="text" class="form-control  form-control-lg"
                                            required="" value="" name="contact[Name]">
                                        <input placeholder="Email" type="email"
                                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="" id="email1"
                                            class="form-control form-control-lg" value="" name="contact[email]">
                                        <input type="number" placeholder="Điện thoại*" name="contact[phone]"
                                            class="form-control form-control-lg" required="">
                                        <textarea placeholder="Nội dung" name="contact[body]" id="comment" class="form-control content-area form-control-lg"
                                            rows="5" required=""></textarea>
                                        <button type="submit" class="btn-lienhe">Gửi thông tin</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div id="contact_map" class="map block-background">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.904611732553!2d105.81388241542348!3d21.03650239288885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab1946cc7e23%3A0x87ab3917166a0cd5!2zQ8O0bmcgdHkgY-G7lSBwaOG6p24gY8O0bmcgbmdo4buHIFNBUE8!5e0!3m2!1svi!2s!4v1555900531747!5m2!1svi!2s"
                                style="border:0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
