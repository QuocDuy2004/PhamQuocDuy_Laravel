@extends('layouts.app')

@section('content')
    <div class="bodywrap">
        <section class="bread-crumb"
            style="background: linear-gradient(0deg, rgba(0,0,0,0.8), rgba(0,0,0,0.3)),  url(//bizweb.dktcdn.net/100/487/743/themes/912230/assets/breadcrumb.jpg?1710378319730) no-repeat center;">

            <div class="container">
                <div class="title-bread-crumb">

                    Giỏ hàng

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

                    <li><strong><span>Giỏ hàng</span></strong></li>

                </ul>
            </div>
        </section>





        <section class="main-cart-page main-container col1-layout">
            <div class="main container cartpcstyle">
                <div class="wrap_background_aside margin-bottom-40" style="display: inline-block;   width: 100%;">
                    <div class="header-cart d-none">
                        <div class="title-block-page">
                            <h1 class="title_cart">
                                <span>Giỏ hàng của bạn</span>
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <section class="section_coupon">
                                <div class="container">


                                    <div class="coupon-swiper swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
                                        style="cursor: grab;">
                                        <div class="swiper-wrapper">

                                            <div class="swiper-slide swiper-slide-active"
                                                style="width: 276px; margin-right: 10px;">

                                                <div class="content_wrap">
                                                    <a title="Chi tiết" href="javascript:void(0)" class="info-button"
                                                        data-coupon="DOLA10" data-time="1/10/2023"
                                                        data-content="Áp dụng cho đơn hàng từ 200k trở lên<br>
Không đi kèm với chương trình khác">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                                            <path
                                                                d="M144 80c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <div class="content-top">
                                                        DOLA10
                                                        <span>Giảm 10.000đ giá trị đơn hàng</span>
                                                    </div>
                                                    <div class="content-bottom">
                                                        <span>HSD: 1/10/2023</span>
                                                        <div class="coupon-code js-copy" data-copy="DOLA10"
                                                            title="Sao chép">Sao chép</div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="swiper-slide swiper-slide-next"
                                                style="width: 276px; margin-right: 10px;">

                                                <div class="content_wrap">
                                                    <a title="Chi tiết" href="javascript:void(0)" class="info-button"
                                                        data-coupon="FREESHIP" data-time="Không thời hạn"
                                                        data-content="Áp dụng cho đơn hàng từ 500k trở lên">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                                            <path
                                                                d="M144 80c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <div class="content-top">
                                                        FREESHIP
                                                        <span>Miễn phí vận chuyển</span>
                                                    </div>
                                                    <div class="content-bottom">
                                                        <span>HSD: Không thời hạn</span>
                                                        <div class="coupon-code js-copy" data-copy="FREESHIP"
                                                            title="Sao chép">Sao chép</div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="swiper-slide" style="width: 276px; margin-right: 10px;">

                                                <div class="content_wrap">
                                                    <a title="Chi tiết" href="javascript:void(0)" class="info-button"
                                                        data-coupon="DOLA20" data-time="1/10/2023"
                                                        data-content="Áp dụng cho đơn hàng từ 2 triệu trở lên<br>
Không đi kèm với chương trình khác">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                                            <path
                                                                d="M144 80c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <div class="content-top">
                                                        DOLA20
                                                        <span>Giảm 20% giá trị đơn hàng</span>
                                                    </div>
                                                    <div class="content-bottom">
                                                        <span>HSD: 1/10/2023</span>
                                                        <div class="coupon-code js-copy" data-copy="DOLA20"
                                                            title="Sao chép">Sao chép</div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="swiper-slide" style="width: 276px; margin-right: 10px;">

                                                <div class="content_wrap">
                                                    <a title="Chi tiết" href="javascript:void(0)" class="info-button"
                                                        data-coupon="DOLA50K" data-time="1/10/2023"
                                                        data-content="Áp dụng cho đơn hàng từ 2 triệu trở lên<br>
Không đi kèm với chương trình khác">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                                            <path
                                                                d="M144 80c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <div class="content-top">
                                                        DOLA50K
                                                        <span>Giảm 50k</span>
                                                    </div>
                                                    <div class="content-bottom">
                                                        <span>HSD: 1/10/2023</span>
                                                        <div class="coupon-code js-copy" data-copy="DOLA50K"
                                                            title="Sao chép">Sao chép</div>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="popup-coupon">
                                <div class="content">
                                    <div class="title">
                                        Thông tin voucher
                                    </div>
                                    <a href="javascript:void(0)" class="close-popup">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            version="1.1" x="0px" y="0px" viewBox="0 0 512.001 512.001"
                                            style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg> </a>
                                    <ul>
                                        <li>
                                            <span>Mã giảm giá:</span>
                                            <span class="code"></span>
                                        </li>
                                        <li>
                                            <span>Ngày hết hạn:</span>
                                            <span class="time"></span>
                                        </li>
                                        <li>
                                            <span>Điều kiện:</span>
                                            <span class="dieukien">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 col-12 col-cart-left">
                            <div class="cart-page d-xl-block d-none">
                                <div class="drawer__inner">
                                    <div class="CartPageContainer">

                                        <form action="/cart" method="post" novalidate=""
                                            class="cart ajaxcart cartpage">
                                            <div class="cart-header-info">
                                                <div>Thông tin sản phẩm</div>
                                                <div>Đơn giá</div>
                                                <div>Số lượng</div>
                                                <div>Thành tiền</div>
                                            </div>
                                            <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">
                                                <div class="ajaxcart__row">
                                                    <div class="ajaxcart__product cart_product" data-line="1">
                                                        <a href="/g-shock-ga-2000-1a2dr-nam-kinh-cung-quartz-pin-mat-so-51-2mm-bo-bam-gio-chong-nuoc-20atm"
                                                            class="ajaxcart__product-image cart_image"
                                                            title="G-SHOCK GA-2000-1A2DR – NAM – KÍNH CỨNG – QUARTZ (PIN) – MẶT SỐ 51.2MM, BỘ BẤM GIỜ, CHỐNG NƯỚC 20ATM"><img
                                                                src="https://bizweb.dktcdn.net/thumb/compact/100/487/743/products/53-ga-2000-1a2dr-699x699.png"
                                                                alt="G-SHOCK GA-2000-1A2DR – NAM – KÍNH CỨNG – QUARTZ (PIN) – MẶT SỐ 51.2MM, BỘ BẤM GIỜ, CHỐNG NƯỚC 20ATM"></a>
                                                        <div class="grid__item cart_info">
                                                            <div class="ajaxcart__product-name-wrapper cart_name">
                                                                <a href="/g-shock-ga-2000-1a2dr-nam-kinh-cung-quartz-pin-mat-so-51-2mm-bo-bam-gio-chong-nuoc-20atm"
                                                                    class="ajaxcart__product-name h4"
                                                                    title="G-SHOCK GA-2000-1A2DR – NAM – KÍNH CỨNG – QUARTZ (PIN) – MẶT SỐ 51.2MM, BỘ BẤM GIỜ, CHỐNG NƯỚC 20ATM">G-SHOCK
                                                                    GA-2000-1A2DR – NAM – KÍNH CỨNG – QUARTZ (PIN) – MẶT SỐ
                                                                    51.2MM, BỘ BẤM GIỜ, CHỐNG NƯỚC 20ATM</a>
                                                                <a class="cart__btn-remove remove-item-cart ajaxifyCart--remove"
                                                                    href="javascript:;" data-line="1">Xóa</a>

                                                            </div>
                                                            <div class="grid">
                                                                <div class="grid__item one-half text-right cart_prices">
                                                                    <span class="cart-price">4.638.000₫</span>

                                                                </div>
                                                            </div>
                                                            <div class="grid">
                                                                <div class="grid__item one-half cart_select">
                                                                    <div class="ajaxcart__qty input-group-btn">
                                                                        <button type="button"
                                                                            class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count"
                                                                            data-id="" data-qty="3" data-line="1"
                                                                            aria-label="-">
                                                                            -
                                                                        </button>
                                                                        <input type="text" name="updates[]"
                                                                            class="ajaxcart__qty-num number-sidebar"
                                                                            maxlength="3" value="4" min="0"
                                                                            data-id="" data-line="1"
                                                                            aria-label="quantity" pattern="[0-9]*">
                                                                        <button type="button"
                                                                            class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count"
                                                                            data-id="" data-line="1" data-qty="5"
                                                                            aria-label="+">
                                                                            +
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="grid">
                                                                <div class="grid__item one-half text-right cart_prices">
                                                                    <span class="cart-price">18.552.000₫</span>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
                                                <div class="row">
                                                    <div class="col-lg-4 col-12 offset-md-8 offset-lg-8 offset-xl-8">
                                                        <div class="ajaxcart__subtotal">
                                                            <div class="cart__subtotal">
                                                                <div class="cart__col-6">Tổng tiền:</div>
                                                                <div class="text-right cart__totle"><span
                                                                        class="total-price">18.552.000₫</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="cart__btn-proceed-checkout-dt">
                                                            <button onclick="goToCheckout(event)" type="button"
                                                                class="button btn btn-default cart__btn-proceed-checkout"
                                                                id="btn-proceed-checkout" title="Thanh toán">Thanh
                                                                toán</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
                            <div class="cart-mobile-page d-block d-xl-none">
                                <div class="CartMobileContainer"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-12 col-cart-right">
                            <form method="post" novalidate="" class="formVAT">
                                <h4>
                                    Thời gian giao hàng
                                </h4>
                                <div class="timedeli-modal">
                                    <fieldset class="input_group date_pick">
                                        <input type="text" placeholder="Chọn ngày" readonly="" id="date"
                                            name="attributes[shipdate]" class="date_picker" required="">
                                    </fieldset>
                                    <fieldset class="input_group date_time">
                                        <select name="time" class="timeer timedeli-cta">
                                            <option selected="">Chọn thời gian</option>


                                            <option value="08h00 - 12h00">08h00 - 12h00</option>

                                            <option value=" 14h00 - 18h00"> 14h00 - 18h00</option>

                                            <option value=" 19h00 - 21h00"> 19h00 - 21h00</option>

                                        </select>
                                    </fieldset>
                                </div>

                                <div class="r-bill">
                                    <div class="checkbox">
                                        <input type="hidden" name="attributes[invoice]" id="re-checkbox-bill"
                                            value="không">
                                        <input type="checkbox" id="checkbox-bill" name="attributes[invoice]"
                                            value="có" class="regular-checkbox">
                                        <label for="checkbox-bill" class="box"></label>
                                        <label for="checkbox-bill" class="title">Xuất hóa đơn công ty</label>
                                    </div>
                                    <div class="bill-field">
                                        <div class="form-group">
                                            <label>Tên công ty</label>
                                            <input type="text" class="form-control val-f"
                                                name="attributes[company_name]" value="" placeholder="Tên công ty">
                                        </div>
                                        <div class="form-group">
                                            <label>Mã số thuế</label>
                                            <input type="text" pattern=".{10,}" class="form-control val-f val-n"
                                                name="attributes[tax_code]" value="" placeholder="Mã số thuế">
                                        </div>
                                        <div class="form-group">
                                            <label>Địa chỉ công ty</label>
                                            <textarea class="form-control val-f" name="attributes[company_address]"
                                                placeholder="Nhập địa chỉ công ty (bao gồm Phường/Xã, Quận/Huyện, Tỉnh/Thành phố nếu có)"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Email nhận hoá đơn</label>
                                            <input type="email" class="form-control val-f val-email"
                                                name="attributes[invoice_email]" value=""
                                                placeholder="Email nhận hoá đơn">
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/sweetalert-min.js?1710378319730"></script>
        <link rel="preload" as="script"
            href="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/bootstrap-datepicker.js?1710378319730">
        <script src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/bootstrap-datepicker.js?1710378319730"
            type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                var date = new Date();
                date.setDate(date.getDate());

                $('.input_group #date').datepicker({
                    format: "dd/mm/yyyy",
                    orientation: "top right",
                    todayHightinght: true,
                    startDate: date
                });
                setTimeout(function() {
                    $('.colrightvat').removeClass('d-none')
                }, 300)
            })
        </script>
        <script src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/cookie.js?1710378319730" type="text/javascript">
        </script>
        <script>
            function setCookie(cname, cvalue, exdays) {

                var date = new Date();
                var minutes = 1;
                date.setTime(date.getTime() + (24 * 60 * 60 * 1000));
                var expires = "; expires=" + date.toGMTString();
                document.cookie = cname + "=" + cvalue + expires + ";path=/";

            }

            function getCookie(cname) {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }

            function delete_cookie(cname, path, domain) {
                if (getCookie(cname)) {
                    document.cookie = cname;
                }
            }

            $('.timedeli-cta, .date_picker').on('change touchstart', function() {
                let date = $('.date_picker').val().split('/')
                var timex = $(this).find(":selected").val();
                if (date != undefined && timex != undefined) {
                    setCookie('ego-delivery-value', '', 1);
                    setCookie('ego-delivery-value', '' + date + '-' + timex + '', 1);
                }
            })

            function updateVAT() {
                $('.btn-checkout').addClass('disabled');
                var invoice = $('input[name="attributes[invoice]"]').val();
                var company = $('input[name="attributes[company_name]"]').val();
                var address = $('[name="attributes[company_address]"]').val();
                var tax = $('input[name="attributes[tax_code]"]').val();
                var email_company = $('input[name="attributes[invoice_email]"]').val();
                var cart_info = {
                    'Xuất hóa đơn': invoice,
                    'Tên công ty': '',
                    'Địa chỉ công ty': '',
                    'Mã số thuế': '',
                    'Email nhận hóa đơn': ''
                };

                if (invoice === 'có') {
                    cart_info = {
                        'Xuất hóa đơn': invoice,
                        'Tên công ty': company,
                        'Địa chỉ công ty': address,
                        'Mã số thuế': tax,
                        'Email nhận hóa đơn': email_company
                    };
                }


                Cookies.set('cart_info', {
                    'company': company,
                    'address': address,
                    'tax': tax,
                    'email_company': email_company,
                    'email': email_company
                });
                var attributes = Object.keys(cart_info).reduce(function(result, info) {
                    if (cart_info[info] !== "") {
                        return {
                            ...result,
                            ...{
                                [info]: cart_info[info]
                            }
                        }
                    }
                    return result;
                }, {})
                const deliveryAttr = getCookie('ego-delivery-value');
                //alert(deliveryAttr);
                if (deliveryAttr !== '') {
                    attributes['Thời gian giao hàng'] = deliveryAttr;
                }
                var data = {};

                data.attributes = attributes;

                var params = {
                    type: 'POST',
                    url: '/cart/update.js',
                    data: data,
                    dataType: 'json',
                    success: function(cart) {
                        window.location.href = '/checkout'
                    },
                    complete: function() {
                        setTimeout(function() {
                            $('.btn-checkout').removeClass('disabled');
                        }, 1000);
                    },
                    error: function(XMLHttpRequest, textStatus) {
                        Bizweb.onError(XMLHttpRequest, textStatus);
                    }
                };
                jQuery.ajax(params);
                setCookie('ego-delivery-value', '', 1);
            }

            $(document).on('keyup', '.val-f', function() {
                if ($(this).val() === '') {
                    if ($(this).next('span.text-danger').length == 0) {
                        $(this).after('<span class="text-danger">Bạn không được để trống trường này</span>');
                    }
                } else {
                    $(this).next('span.text-danger').remove();
                    if ($(this).hasClass('val-n') &&
                        $(this).val().trim().length < Number('10')) {
                        $(this).after('<span class="text-danger">Mã số thuế phải tối thiểu 10 ký tự</span>');
                    }
                    if ($(this).hasClass('val-email') &&
                        !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($(this).val().trim()))) {
                        $(this).after('<span class="text-danger">Định dạng email không đúng</span>');
                    }
                }
            })

            if ($('.r-bill .regular-checkbox').is(':checked')) {
                $('.bill-field').show();
            }

            $(document).on('click', '.r-bill .regular-checkbox', 'click', function() {
                console.log($(this).is(':checked'));
                if ($(this).is(':checked')) {
                    $('#re-checkbox-bill').val('có');
                } else {
                    $('#re-checkbox-bill').val('không');
                }
                $('.bill-field').stop(true, true).slideToggle(400);
            })
            /** PHan hoa don **/

            function goToCheckout(e) {
                e.preventDefault();

                if ($('#checkbox-bill').is(':checked')) {
                    var a = $(this);
                    let isValidated = true;
                    $('.val-f').each(function() {
                        if ($(this).val() === '') {
                            isValidated = false;
                        } else {
                            if ($(this).hasClass('val-n') && $(this).val().trim().length < Number('10')) {
                                isValidated = false;
                            }
                            if ($(this).hasClass('val-email') && !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(
                                    $(this).val().trim()))) {
                                isValidated = false;
                            }
                        }
                    })

                    if (isValidated) {
                        swal({
                            title: `Bạn có chắc không xuất hóa đơn?`,
                            text: `Chọn đóng và chọn vào xuất hóa đơn công ty sau đó nhập thông tin công ty để xuất hóa đơn!`,
                            type: "warning",
                            className: 'vat-checked-modal',
                            buttons: ["Đóng", "Xác nhận"],
                        }).then(function() {
                            $('body').on('click', '.swal-button--confirm', function() {
                                updateVAT();
                            })
                        });
                    } else {
                        $('.val-f').each(function() {
                            if ($(this).val() === '') {
                                if ($(this).next('span.text-danger').length == 0) {
                                    $(this).after(
                                        '<span class="text-danger">Bạn không được để trống trường này</span>');
                                }
                            } else {
                                $(this).next('span.text-danger').remove();
                                if ($(this).hasClass('val-n') &&
                                    $(this).val().trim().length < Number('10')) {
                                    $(this).after(
                                        '<span class="text-danger">Mã số thuế phải tối thiểu 10 ký tự nè</span>');
                                }
                                if ($(this).hasClass('val-email') &&
                                    !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($(this).val().trim()))) {
                                    $(this).after('<span class="text-danger">Định dạng email không đúng</span>');
                                }
                            }
                        })
                    }
                } else {
                    updateVAT();
                    $('body').off('click', '.swal-button--confirm');
                    location.href = '/checkout'
                }
                return;


            }

            /** end hoa don **/
        </script>
    </div>
@endsection
