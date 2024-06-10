@extends('layouts.app')

@section('content')
    <div class="bodywrap">

        <section class="bread-crumb"
            style="background: linear-gradient(0deg, rgba(0,0,0,0.8), rgba(0,0,0,0.3)),  url(//bizweb.dktcdn.net/100/487/743/themes/912230/assets/breadcrumb.jpg?1710378319730) no-repeat center;">

            <div class="container">
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


                    <li>
                        <a class="changeurl" href="/san-pham-ban-chay"><span>Sản phẩm bán chạy</span></a>
                        <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                                <path fill="currentColor"
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                    class=""></path>
                            </svg>&nbsp;</span>
                    </li>

                    <li><strong><span>{{ $product->name }}</span></strong></li>
                    <li>

                    </li>
                </ul>
            </div>
        </section>
        <section class="product layout-product" itemscope="" itemtype="https://schema.org/Product">
            <meta itemprop="category" content="Sản phẩm bán chạy">
            <meta itemprop="url"
                content="//dola-watch.mysapo.net/seiko-srz520p1-nu-quartz-pin-mat-so-29mm-kinh-cung-chong-nuoc-5atm">
            <meta itemprop="name" content="{{ $product->name }}">
            <meta itemprop="image"
                content="http://bizweb.dktcdn.net/thumb/grande/100/487/743/products/59-srz520p1-699x699.png?v=1687060768163">
            <div class="d-none" itemprop="brand" itemtype="https://schema.org/Brand" itemscope="">
                <meta itemprop="name" content="Seiko">
            </div>
            <div class="d-none hidden" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                <div class="inventory_quantity hidden" itemscope="" itemtype="http://schema.org/ItemAvailability">
                    <span class="a-stock" itemprop="supersededBy">
                        Còn hàng
                    </span>
                </div>
                <link itemprop="availability" href="http://schema.org/InStock">
                <meta itemprop="priceCurrency" content="VND">
                <meta itemprop="price" content="6840000">
                <meta itemprop="url"
                    content="https://dola-watch.mysapo.net/seiko-srz520p1-nu-quartz-pin-mat-so-29mm-kinh-cung-chong-nuoc-5atm">
                <span itemprop="UnitPriceSpecification" itemscope="" itemtype="https://schema.org/Downpayment">
                    <meta itemprop="priceType" content="6840000">
                </span>
                <meta itemprop="priceValidUntil" content="2099-01-01">
            </div>
            <div class="d-none hidden" id="https://dola-watch.mysapo.net" itemprop="seller"
                itemtype="http://schema.org/Organization" itemscope="">
                <meta itemprop="name" content="Dola Watch">
                <meta itemprop="url" content="https://dola-watch.mysapo.net">
                <meta itemprop="logo"
                    content="http://bizweb.dktcdn.net/100/487/743/themes/912230/assets/logo.png?1710378319730">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="details-product">
                            <div class="row">
                                <div class="product-detail-left product-images col-12 col-md-12 col-lg-4">
                                    <div class="product-image-block relative ">

                                        <div
                                            class="swiper-container gallery-top block-background swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                            <div class="swiper-wrapper" id="lightgallery">

                                                <a class="swiper-slide swiper-slide-active" data-hash="0"
                                                    href="{{ asset('assets/images/' . $product->image) }}"
                                                    title="Click để xem" style="width: 296px;">
                                                    <img height="400" width="400"
                                                        src="{{ asset('assets/images/' . $product->image) }}"
                                                        alt="{{ $product->image }}"
                                                        data-image=""
                                                        class="img-responsive mx-auto d-block swiper-lazy swiper-lazy-loaded">
                                                </a>

                                            </div>
                                            <div class="tag-km">

                                                <span><img
                                                        src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/title_image_1_tag.png?1710378319730">
                                                    Mới</span>
                                                <span><img
                                                        src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/title_image_3_tag.png?1710378319730">
                                                    Bán chạy</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-12 col-md-7 col-lg-5">
                                    <div class="details-pro block-background">
                                        <h1 class="title-product">{{ $product->name }}</h1>
                                        <div class="inventory_quantity">

                                            <div class="thump-break">
                                                <span class="mb-break inventory">
                                                    <span class="stock-brand-title">Tình trạng:</span>
                                                    <span class="a-stock">
                                                        Còn hàng
                                                    </span>
                                                </span>
                                                <div class="sku-product clearfix">
                                                    <span class="stock-brand-title">Mã sản phẩm:</span>
                                                    <span class="variant-sku" itemprop="sku"
                                                        content="Đang cập nhật"><span class="a-sku">Đang cập
                                                            nhật</span></span>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-box clearfix">
                                            <div class="special-price">
                                                <span class="price product-price">{{ $product->price }} ₫</span>
                                                <meta itemprop="price" content="{{ $product->price }}">
                                                <meta itemprop="priceCurrency" content="VND">
                                            </div>
                                        </div>
                                            <div class="pro-promo">Áp dụng chương trình giảm giá cho khách hàng là
                                                thành viên</div>
                                            <div class="form-product">
                                                <div class="box-variant clearfix  d-none ">
                                                    <input type="hidden" id="one_variant" name="variantId"
                                                        value="91048622">
                                                </div>
                                                <div class="clearfix form-group ">
                                                    <div class="flex-quantity">
                                                        <div class="custom custom-btn-number show">
                                                            <label class="sl section">Số lượng:</label>
                                                            <div class="input_number_product form-control">
                                                                <button class="btn_num num_1 button button_qty"
                                                                    onclick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro > 1 ) result.value--;return false;"
                                                                    type="button">-</button>
                                                                <input type="text" id="qtym" name="quantity"
                                                                    value="1" maxlength="3"
                                                                    class="form-control prd_quantity"
                                                                    onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                                                    onchange="if(this.value == 0)this.value=1;">
                                                                <button class="btn_num num_2 button button_qty"
                                                                    onclick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;"
                                                                    type="button">+</button>
                                                            </div>
                                                        </div>
                                                        <div class="btn-mua button_actions clearfix">

                                                            <button type="submit"
                                                                class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart">
                                                                <span class="icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                                        data-name="Layer 1" viewBox="0 0 40 40">
                                                                        <defs></defs>
                                                                        <g>
                                                                            <path class="cls-1"
                                                                                d="M35.91,36.17,33.24,10.75a1,1,0,0,0-1-.94h-5V8.67a6.47,6.47,0,1,0-12.93,0V9.81h-5a1.05,1.05,0,0,0-1,.94L5.52,36.17a1,1,0,0,0,.93,1.15H34.87a1,1,0,0,0,1.05-1A.41.41,0,0,0,35.91,36.17ZM16.35,8.67a4.38,4.38,0,1,1,8.75,0V9.81H16.35ZM7.73,35.24l2.45-23.33h4.07v2.3a1,1,0,0,0,1,1.09,1,1,0,0,0,1.09-1V11.91H25.1v2.3a1,1,0,0,0,1,1.09,1,1,0,0,0,1.09-1V11.91h4.07l2.45,23.33Z">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <span class="text">
                                                                    <span class="txt-main text_1">Thêm vào giỏ</span>
                                                                    <span class="text_2">Giao hàng tận nơi miễn
                                                                        phí</span>
                                                                </span>

                                                            </button>

                                                            <a href=""
                                                                class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart">
                                                                <span class="text">
                                                                    <span class="txt-main text_1">Mua ngay</span>
                                                                    <span class="text_2">Tiền hành mua sản phẩm</span>
                                                                </span>

                                                            </a>


                                                            <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                                data-wish="seiko-srz520p1-nu-quartz-pin-mat-so-29mm-kinh-cung-chong-nuoc-5atm"
                                                                tabindex="0" title="Thêm vào yêu thích">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 512 512">
                                                                    <path
                                                                        d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                                                    </path>
                                                                </svg>
                                                            </a>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>



                                        <div class="khuyen-mai">
                                            <div class="title">
                                                <img width="64" height="64"
                                                    src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/giftbox.png?1710378319730"
                                                    alt="vouver"><span>Khuyến mãi đặc biệt !!!</span>
                                            </div>
                                            <div class="content">
                                                <ul>


                                                    <li><img width="20" height="20"
                                                            src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/km_product1.png?1710378319730"
                                                            alt="Áp dụng Phiếu quà tặng/ Mã giảm giá theo ngành hàng.">Áp
                                                        dụng Phiếu quà tặng/ Mã giảm giá theo ngành hàng.</li>



                                                    <li><img width="20" height="20"
                                                            src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/km_product2.png?1710378319730"
                                                            alt="Giảm giá 10% khi mua từ 5 sản phẩm trở lên.">Giảm giá
                                                        10% khi mua từ 5 sản phẩm trở lên.</li>



                                                    <li><img width="20" height="20"
                                                            src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/km_product3.png?1710378319730"
                                                            alt="Tặng 100.000₫ mua hàng tại website thành viên Dola Watch, áp dụng khi mua Online tại Hồ Chí Minh và 1 số khu vực khác.">Tặng
                                                        100.000₫ mua hàng tại website thành viên Dola Watch, áp dụng khi
                                                        mua Online tại Hồ Chí Minh và 1 số khu vực khác.</li>

                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-5 col-12 content-pro">


                                    <div class="thumb-vendor">
                                        <div class="title">
                                            Thương hiệu
                                        </div>

                                        <div class="vendoritem"><img width="100" height="100"
                                                class="lazyload loaded"
                                                src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/vendorimg_6.jpg?1710378319730"
                                                data-src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/vendorimg_6.jpg?1710378319730"
                                                alt="Seiko" data-was-processed="true"></div>


                                        <a class="see-more" href="/search/?query=vendor:seiko">Xem tất cả
                                            <b>Seiko</b></a>

                                    </div>




                                    <div class="chinhsach-pro">


                                        <div class="item">
                                            <img width="40" height="40"
                                                src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/chinhsach_1.png?1710378319730"
                                                alt="Miễn phí vẫn chuyển">
                                            <div class="text">
                                                <span class="title">Miễn phí vẫn chuyển</span>
                                                <span class="des">Cho tất cả đơn hàng trong nội thành Hồ Chí
                                                    Minh</span>
                                            </div>
                                        </div>




                                        <div class="item">
                                            <img width="40" height="40"
                                                src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/chinhsach_2.png?1710378319730"
                                                alt="Miễn phí đổi - trả">
                                            <div class="text">
                                                <span class="title">Miễn phí đổi - trả</span>
                                                <span class="des">Đối với sản phẩm lỗi sản xuất hoặc vận
                                                    chuyển</span>
                                            </div>
                                        </div>




                                        <div class="item">
                                            <img width="40" height="40"
                                                src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/chinhsach_3.png?1710378319730"
                                                alt="Hỗ trợ nhanh chóng">
                                            <div class="text">
                                                <span class="title">Hỗ trợ nhanh chóng</span>
                                                <span class="des">Gọi Hotline: {{ $contacts->phone }} để được hỗ trợ
                                                    ngay lập
                                                    tức</span>
                                            </div>
                                        </div>




                                        <div class="item">
                                            <img width="40" height="40"
                                                src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/chinhsach_4.png?1710378319730"
                                                alt="Ưu đãi thành viên">
                                            <div class="text">
                                                <span class="title">Ưu đãi thành viên</span>
                                                <span class="des">Đăng ký thành viên để được nhận được nhiều khuyến
                                                    mãi
                                                </span>
                                            </div>
                                        </div>



                                    </div>





                                </div>


                                <div class="col-12 col-lg-8 col-xl-8 ">

                                    <div class="product-tab e-tabs not-dqtab block-background" id="tab-product">
                                        <ul class="tabs tabs-title clearfix">

                                            <li class="tab-link active" data-tab="#tab-1">
                                                <h3>
                                                    <img alt="title"
                                                        src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/wristwatch.png?1710378319730">
                                                    <span>Mô tả sản phẩm</span>
                                                </h3>
                                            </li>


                                            <li class="tab-link" data-tab="#tab-2">
                                                <h3>
                                                    <img alt="title"
                                                        src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/wristwatch.png?1710378319730">
                                                    <span>Hướng dẫn mua hàng</span>
                                                </h3>
                                            </li>


                                        </ul>
                                        <div class="tab-float">

                                            <div id="tab-1" class="tab-content active content_extab">
                                                <div class="rte product_getcontent">

                                                    <div class="ba-text-fpt "> <!--has-height-->

                                                        <h2><b>{{ $product->detail }}</b>
                                                        </h2>
                
                                                        <p>{{ $product->description }}</p>
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="tab-2" class="tab-content content_extab">
                                                <div class="rte">

                                                    <p><strong>Bước 1:</strong>&nbsp;Truy cập website và lựa chọn sản
                                                        phẩm&nbsp;cần mua</p>
                                                    <p><strong>Bước 2:</strong>&nbsp;Click và sản phẩm muốn mua, màn
                                                        hình hiển thị ra pop up với các lựa chọn sau</p>
                                                    <p>Nếu bạn muốn tiếp tục mua hàng: Bấm vào phần tiếp tục mua hàng để
                                                        lựa chọn thêm sản phẩm vào giỏ hàng</p>
                                                    <p>Nếu bạn muốn xem giỏ hàng để cập nhật sản phẩm: Bấm vào xem giỏ
                                                        hàng</p>
                                                    <p>Nếu bạn muốn đặt hàng và thanh toán cho sản phẩm này vui lòng bấm
                                                        vào: Đặt hàng và thanh toán</p>
                                                    <p><strong>Bước 3:</strong>&nbsp;Lựa chọn thông tin tài khoản thanh
                                                        toán</p>
                                                    <p>Nếu bạn đã có tài khoản vui lòng nhập thông tin tên đăng nhập là
                                                        email và mật khẩu vào mục đã có tài khoản trên hệ thống</p>
                                                    <p>Nếu bạn chưa có tài khoản và muốn đăng ký tài khoản vui lòng điền
                                                        các thông tin cá nhân để tiếp tục đăng ký tài khoản. Khi có tài
                                                        khoản bạn sẽ dễ dàng theo dõi được đơn hàng của mình</p>
                                                    <p>Nếu bạn muốn mua hàng mà không cần tài khoản vui lòng nhấp chuột
                                                        vào mục đặt hàng không cần tài khoản</p>
                                                    <p><strong>Bước 4:</strong>&nbsp;Điền các thông tin của bạn để nhận
                                                        đơn hàng, lựa chọn hình thức thanh toán và vận chuyển cho đơn
                                                        hàng của mình</p>
                                                    <p><strong>Bước 5:</strong>&nbsp;Xem lại thông tin đặt hàng, điền
                                                        chú thích và gửi đơn hàng</p>
                                                    <p>Sau khi nhận được đơn hàng bạn gửi chúng tôi sẽ liên hệ bằng cách
                                                        gọi điện lại để xác nhận lại đơn hàng và địa chỉ của bạn.</p>
                                                    <p>Trân trọng cảm ơn.</p>

                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 col-lg-4 col-xl-4 ">

                                    <div class="thong-so block-background">


                                        <div class="title">
                                            <img alt="title"
                                                src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/wristwatch.png?1710378319730">
                                            <span>Thông số kỹ thuật</span>
                                        </div>
                                        <div class="content">


                                            <p><strong>Thương Hiệu:</strong>&nbsp;{{ $product->brand_id }}</p>
                                            <p><strong>Số Hiệu Sản Phẩm:</strong>&nbsp;SRZ520P1</p>
                                            <p><strong>Xuất Xứ:</strong>&nbsp;Nhật bản</p>
                                            <p><strong>Giới Tính:</strong>&nbsp;Nữ</p>
                                            <p><strong>Kính:</strong>&nbsp;Hardlex Crystal (Kính Cứng)</p>
                                            <p><strong>Máy:</strong>&nbsp;Quartz (Pin)</p>
                                            <p><strong>Bảo Hành Quốc Tế:</strong>&nbsp;1 Năm</p>
                                            <p><strong>Bảo Hành Tại Hải Triều:</strong>&nbsp;<strong>5 Năm</strong></p>
                                            <p><strong>Đường Kính Mặt Số:</strong>&nbsp;29 mm</p>
                                            <p><strong>Bề Dày Mặt Số:</strong>&nbsp;7.3 mm</p>
                                            <p><strong>Niềng:</strong>&nbsp;Thép Không Gỉ</p>
                                            <p><strong>Dây Đeo:</strong>&nbsp;Thép Không Gỉ</p>
                                            <p><strong>Màu Mặt Số:</strong>&nbsp;Trắng</p>
                                            <p><strong>Chống Nước:</strong>&nbsp;5 ATM</p>
                                            <p><strong>Chức Năng:</strong></p>
                                        </div>
                                    </div>

                                    <div class="productcompareprice">
                                        <div class="block-background">
                                            <div class="product_sameprice">
                                                <div class="title">
                                                    <img alt="title"
                                                        src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/wristwatch.png?1710378319730">
                                                    <span>Cùng phân khúc giá</span>
                                                </div>

                                            </div>
                                            <div class="list">





                                                <div class="product-list">


                                                    <div class="product-thumbnail">
                                                        <a class="image_thumb scale_hover"
                                                            href="/op-9908ags-d-88-nam-kinh-sapphire-automatic-tu-dong-day-kim-loai"
                                                            title="OP 9908AGS-D-88 – NAM – KÍNH SAPPHIRE – AUTOMATIC (TỰ ĐỘNG) – DÂY KIM LOẠI">
                                                            <img src="//bizweb.dktcdn.net/thumb/large/100/487/743/products/91-9908ags-d-88-699x699.png?v=1687062459220"
                                                                alt="OP 9908AGS-D-88 – NAM – KÍNH SAPPHIRE – AUTOMATIC (TỰ ĐỘNG) – DÂY KIM LOẠI">

                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                                href="/op-9908ags-d-88-nam-kinh-sapphire-automatic-tu-dong-day-kim-loai"
                                                                title="OP 9908AGS-D-88 – NAM – KÍNH SAPPHIRE – AUTOMATIC (TỰ ĐỘNG) – DÂY KIM LOẠI">OP
                                                                9908AGS-D-88 – NAM – KÍNH SAPPHIRE – AUTOMATIC (TỰ ĐỘNG)
                                                                – DÂY KIM LOẠI</a></h3>
                                                        <div class="price-box">
                                                            <span class="price">6.870.000₫</span>
                                                            <span class="compare-price">8.200.000₫</span>


                                                        </div>

                                                    </div>
                                                </div>





                                                <div class="product-list">


                                                    <div class="product-thumbnail">
                                                        <a class="image_thumb scale_hover"
                                                            href="/seiko-5-field-sports-style-srpg33k1-nam-automatic-tu-dong-mat-so-39-4mm-chong-nuoc-10atm-bo-may-in-house"
                                                            title="SEIKO 5 FIELD SPORTS STYLE SRPG33K1 – NAM – AUTOMATIC (TỰ ĐỘNG) – MẶT SỐ 39.4MM, CHỐNG NƯỚC 10ATM, BỘ MÁY IN-HOUSE">
                                                            <img src="//bizweb.dktcdn.net/thumb/large/100/487/743/products/srpg33k1-699x699.png?v=1687059618537"
                                                                alt="SEIKO 5 FIELD SPORTS STYLE SRPG33K1 – NAM – AUTOMATIC (TỰ ĐỘNG) – MẶT SỐ 39.4MM, CHỐNG NƯỚC 10ATM, BỘ MÁY IN-HOUSE">

                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                                href="/seiko-5-field-sports-style-srpg33k1-nam-automatic-tu-dong-mat-so-39-4mm-chong-nuoc-10atm-bo-may-in-house"
                                                                title="SEIKO 5 FIELD SPORTS STYLE SRPG33K1 – NAM – AUTOMATIC (TỰ ĐỘNG) – MẶT SỐ 39.4MM, CHỐNG NƯỚC 10ATM, BỘ MÁY IN-HOUSE">SEIKO
                                                                5 FIELD SPORTS STYLE SRPG33K1 – NAM – AUTOMATIC (TỰ
                                                                ĐỘNG) – MẶT SỐ 39.4MM, CHỐNG NƯỚC 10ATM, BỘ MÁY
                                                                IN-HOUSE</a></h3>
                                                        <div class="price-box">
                                                            <span class="price">7.090.000₫</span>
                                                            <span class="compare-price">8.200.000₫</span>


                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <script>
                                        $(document).ready(function($) {

                                            var dfprice = '6.840.000₫';
                                            var pricefirst = '6840000';
                                            var totalmax = '7840000';
                                            var researchurl = '/search?query=price_min:(>' + pricefirst + ')%20AND%20price_max:(<=' + totalmax +
                                                ')&view=productsame';

                                            $.ajax({
                                                type: 'GET',
                                                url: researchurl,
                                                success: function(data) {
                                                    if (data && data.trim() === '') {} else {
                                                        setTimeout(function() {
                                                            $('.productcompareprice').html(data);
                                                            $('.product_sameprice_title_detail span').html(dfprice);
                                                            $('.btnxemngay').attr('href', '/search?query=price_min:(>' +
                                                                pricefirst + ')%20AND%20price_max:(<=' + totalmax + ')');
                                                        }, 500);
                                                        $('.productcompareprice').removeClass('d-none');

                                                    }

                                                }
                                            });

                                        });
                                    </script>
                                </div>
                                <div class="col-12 col-lg-12 col-xl-12">






                                    <div class="productRelate product-lq">
                                        <div class="block-background">


                                            <div class="group_title_index">
                                                <h3 class="title">
                                                    <img alt="title"
                                                        src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/wristwatch.png?1710378319730">
                                                    <a class="title-name" href="/san-pham-ban-chay"
                                                        title="Sản phẩm liên quan">Sản phẩm liên quan

                                                    </a>
                                                </h3>

                                            </div>

                                            <div
                                                class="product-relate-swiper swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                                <div class="swiper-wrapper"
                                                    style="transform: translate3d(0px, 0px, 0px);">


                                                    <div class="swiper-slide swiper-slide-active"
                                                        style="width: 222.75px; margin-right: 15px;">
                                                        <div class=" item_product_main">






















































































                                                            <form action="/cart/add" method="post"
                                                                class="variants product-action" data-cart-form=""
                                                                data-id="product-actions-32499353"
                                                                enctype="multipart/form-data">
                                                                <div class="product-thumbnail">
                                                                    <a class="image_thumb scale_hover"
                                                                        href="/demo-san-pham-co-thuoc-tinh"
                                                                        title="Demo sản phẩm có thuộc tính">
                                                                        <img width="234" height="234"
                                                                            class="lazyload image1"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="//bizweb.dktcdn.net/thumb/large/100/487/743/products/fgw0100aw0-15775f27-e1be-421a-af5f-acd8ea138196.png?v=1694134890500"
                                                                            alt="Demo sản phẩm có thuộc tính">

                                                                    </a>




                                                                    <div class="vendoritem"><img width="60"
                                                                            height="60" class="lazyload"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/vendorimg_5.jpg?1710378319730"
                                                                            alt="Orient"></div>


                                                                    <input class="hidden" type="hidden" name="variantId"
                                                                        value="97465463">
                                                                    <div class="action">


                                                                        <button class="btn-cart btn-views"
                                                                            title="Tùy chọn" type="button"
                                                                            onclick="window.location.href='/demo-san-pham-co-thuoc-tinh'">
                                                                            Tùy chọn
                                                                        </button>
                                                                        <a title="Xem nhanh"
                                                                            href="/demo-san-pham-co-thuoc-tinh"
                                                                            data-handle="demo-san-pham-co-thuoc-tinh"
                                                                            class="quick-view btn-views">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#fff"
                                                                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                        <a href="javascript:void(0)"
                                                                            class="setWishlist btn-wishlist btn-views"
                                                                            data-wish="demo-san-pham-co-thuoc-tinh"
                                                                            tabindex="0" title="Thêm vào yêu thích">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#ffffff"
                                                                                    d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                    </div>
                                                                    <div class="tag-km">

                                                                        <span><img alt="Mới" width="60"
                                                                                height="60" class="lazyload"
                                                                                src="{{ asset('assets/images/' . $product->image) }}"
                                                                                data-src="{{ asset('assets/images/' . $product->image) }}">
                                                                            Mới</span>





                                                                        <span><img alt="Bán chạy" width="60"
                                                                                height="60" class="lazyload"
                                                                                src="{{ asset('assets/images/' . $product->image) }}"
                                                                                data-src="{{ asset('assets/images/' . $product->image) }}">
                                                                            Bán chạy</span>

                                                                    </div>

                                                                </div>

                                                                <div class="product-info">
                                                                    <h3 class="product-name"><a
                                                                            class="line-clamp line-clamp-2"
                                                                            href="/demo-san-pham-co-thuoc-tinh"
                                                                            title="Demo sản phẩm có thuộc tính">Demo
                                                                            sản phẩm có thuộc tính</a></h3>
                                                                    <div class="price-box">
                                                                        4.160.000₫ </div>

                                                                    <div class="pro-promo line-clamp line-clamp-2">
                                                                        Miễn phí thay pin trọn đời cho tất cả khách hàng
                                                                    </div>



                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>



                                                    <div class="swiper-slide swiper-slide-next"
                                                        style="width: 222.75px; margin-right: 15px;">
                                                        <div class=" item_product_main">




















































































                                                            <form action="/cart/add" method="post"
                                                                class="variants product-action" data-cart-form=""
                                                                data-id="product-actions-31449471"
                                                                enctype="multipart/form-data">
                                                                <div class="product-thumbnail">
                                                                    <a class="image_thumb scale_hover"
                                                                        href="/tissot-t103-310-36-111-01-nu-quartz-pin-mat-so-28mm-kinh-sapphire-chong-nuoc-3atm"
                                                                        title="TISSOT T103.310.36.111.01 – NỮ – QUARTZ (PIN) – MẶT SỐ 28MM, KÍNH SAPPHIRE, CHỐNG NƯỚC 3ATM">
                                                                        <img width="234" height="234"
                                                                            class="lazyload image1"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="//bizweb.dktcdn.net/thumb/large/100/487/743/products/158-t103-310-36-111-01-2-699x699.png?v=1687062170310"
                                                                            alt="TISSOT T103.310.36.111.01 – NỮ – QUARTZ (PIN) – MẶT SỐ 28MM, KÍNH SAPPHIRE, CHỐNG NƯỚC 3ATM">

                                                                    </a>

                                                                    <span class="smart">Giảm<br>
                                                                        10%
                                                                    </span>



                                                                    <div class="vendoritem"><img width="60"
                                                                            height="60" class="lazyload"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="{{ asset('assets/images/' . $product->image) }}"
                                                                            alt="TISSOT"></div>


                                                                    <input class="hidden" type="hidden" name="variantId"
                                                                        value="91049075">
                                                                    <div class="action">

                                                                        <button class="btn-cart btn-views add_to_cart "
                                                                            title="Mua ngay">
                                                                            Mua ngay
                                                                        </button>
                                                                        <a title="Xem nhanh"
                                                                            href="/tissot-t103-310-36-111-01-nu-quartz-pin-mat-so-28mm-kinh-sapphire-chong-nuoc-3atm"
                                                                            data-handle="tissot-t103-310-36-111-01-nu-quartz-pin-mat-so-28mm-kinh-sapphire-chong-nuoc-3atm"
                                                                            class="quick-view btn-views">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#fff"
                                                                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                        <a href="javascript:void(0)"
                                                                            class="setWishlist btn-wishlist btn-views"
                                                                            data-wish="tissot-t103-310-36-111-01-nu-quartz-pin-mat-so-28mm-kinh-sapphire-chong-nuoc-3atm"
                                                                            tabindex="0" title="Thêm vào yêu thích">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#ffffff"
                                                                                    d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                    </div>
                                                                    <div class="tag-km">





                                                                        <span><img alt="Bán chạy" width="60"
                                                                                height="60" class="lazyload"
                                                                                src="{{ asset('assets/images/' . $product->image) }}"
                                                                                data-src="{{ asset('assets/images/' . $product->image) }}">
                                                                            Bán chạy</span>

                                                                    </div>

                                                                </div>

                                                                <div class="product-info">
                                                                    <h3 class="product-name"><a
                                                                            class="line-clamp line-clamp-2"
                                                                            href="/tissot-t103-310-36-111-01-nu-quartz-pin-mat-so-28mm-kinh-sapphire-chong-nuoc-3atm"
                                                                            title="TISSOT T103.310.36.111.01 – NỮ – QUARTZ (PIN) – MẶT SỐ 28MM, KÍNH SAPPHIRE, CHỐNG NƯỚC 3ATM">TISSOT
                                                                            T103.310.36.111.01 – NỮ – QUARTZ (PIN) – MẶT
                                                                            SỐ 28MM, KÍNH SAPPHIRE, CHỐNG NƯỚC 3ATM</a>
                                                                    </h3>
                                                                    <div class="price-box">
                                                                        12.600.000₫
                                                                        <span class="compare-price">14.000.000₫</span>

                                                                    </div>

                                                                    <div class="pro-promo line-clamp line-clamp-2">
                                                                        Tặng kèm gói bảo hành lên đến 5 năm</div>



                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>



                                                    <div class="swiper-slide"
                                                        style="width: 222.75px; margin-right: 15px;">
                                                        <div class=" item_product_main">






















































































                                                            <form action="/cart/add" method="post"
                                                                class="variants product-action" data-cart-form=""
                                                                data-id="product-actions-31449453"
                                                                enctype="multipart/form-data">
                                                                <div class="product-thumbnail">
                                                                    <a class="image_thumb scale_hover"
                                                                        href="/longines-lyre-l4-360-2-12-7-nu-automatic-tu-dong-mat-so-25mm-kinh-sapphire-chong-nuoc-3atm"
                                                                        title="LONGINES LYRE L4.360.2.12.7 – NỮ – AUTOMATIC (TỰ ĐỘNG) – MẶT SỐ 25MM, KÍNH SAPPHIRE, CHỐNG NƯỚC 3ATM">
                                                                        <img width="234" height="234"
                                                                            class="lazyload image1"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="//bizweb.dktcdn.net/thumb/large/100/487/743/products/l4-360-2-12-7-699x699.png?v=1687062077460"
                                                                            alt="LONGINES LYRE L4.360.2.12.7 – NỮ – AUTOMATIC (TỰ ĐỘNG) – MẶT SỐ 25MM, KÍNH SAPPHIRE, CHỐNG NƯỚC 3ATM">

                                                                    </a>




                                                                    <div class="vendoritem"><img width="60"
                                                                            height="60" class="lazyload"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/vendorimg_14.jpg?1710378319730"
                                                                            alt="Longines"></div>


                                                                    <input class="hidden" type="hidden" name="variantId"
                                                                        value="91049037">
                                                                    <div class="action">

                                                                        <button class="btn-cart btn-views add_to_cart "
                                                                            title="Mua ngay">
                                                                            Mua ngay
                                                                        </button>
                                                                        <a title="Xem nhanh"
                                                                            href="/longines-lyre-l4-360-2-12-7-nu-automatic-tu-dong-mat-so-25mm-kinh-sapphire-chong-nuoc-3atm"
                                                                            data-handle="longines-lyre-l4-360-2-12-7-nu-automatic-tu-dong-mat-so-25mm-kinh-sapphire-chong-nuoc-3atm"
                                                                            class="quick-view btn-views">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#fff"
                                                                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                        <a href="javascript:void(0)"
                                                                            class="setWishlist btn-wishlist btn-views"
                                                                            data-wish="longines-lyre-l4-360-2-12-7-nu-automatic-tu-dong-mat-so-25mm-kinh-sapphire-chong-nuoc-3atm"
                                                                            tabindex="0" title="Thêm vào yêu thích">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#ffffff"
                                                                                    d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                    </div>
                                                                    <div class="tag-km">



                                                                        <span><img alt="Nổi bật" width="60"
                                                                                height="60" class="lazyload"
                                                                                src="{{ asset('assets/images/' . $product->image) }}"
                                                                                data-src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/title_image_2_tag.png?1710378319730">
                                                                            Nổi bật</span>



                                                                        <span><img alt="Bán chạy" width="60"
                                                                                height="60" class="lazyload"
                                                                                src="{{ asset('assets/images/' . $product->image) }}"
                                                                                data-src="{{ asset('assets/images/' . $product->image) }}">
                                                                            Bán chạy</span>

                                                                    </div>

                                                                </div>

                                                                <div class="product-info">
                                                                    <h3 class="product-name"><a
                                                                            class="line-clamp line-clamp-2"
                                                                            href="/longines-lyre-l4-360-2-12-7-nu-automatic-tu-dong-mat-so-25mm-kinh-sapphire-chong-nuoc-3atm"
                                                                            title="LONGINES LYRE L4.360.2.12.7 – NỮ – AUTOMATIC (TỰ ĐỘNG) – MẶT SỐ 25MM, KÍNH SAPPHIRE, CHỐNG NƯỚC 3ATM">LONGINES
                                                                            LYRE L4.360.2.12.7 – NỮ – AUTOMATIC (TỰ
                                                                            ĐỘNG) – MẶT SỐ 25MM, KÍNH SAPPHIRE, CHỐNG
                                                                            NƯỚC 3ATM</a></h3>
                                                                    <div class="price-box">
                                                                        38.532.000₫ </div>

                                                                    <div class="pro-promo line-clamp line-clamp-2">Áp
                                                                        dụng chương trình giảm giá cho khách hàng là
                                                                        thành viên</div>



                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>



                                                    <div class="swiper-slide"
                                                        style="width: 222.75px; margin-right: 15px;">
                                                        <div class=" item_product_main">






















































































                                                            <form action="/cart/add" method="post"
                                                                class="variants product-action" data-cart-form=""
                                                                data-id="product-actions-31449433"
                                                                enctype="multipart/form-data">
                                                                <div class="product-thumbnail">
                                                                    <a class="image_thumb scale_hover"
                                                                        href="/g-shock-ga-1000-1adr-nam-quartz-pin-day-cao-su"
                                                                        title="G-SHOCK GA-1000-1ADR – NAM – QUARTZ (PIN) – DÂY CAO SU">
                                                                        <img width="234" height="234"
                                                                            class="lazyload image1"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="//bizweb.dktcdn.net/thumb/large/100/487/743/products/ga-1000-1adr-699x699.png?v=1687061856183"
                                                                            alt="G-SHOCK GA-1000-1ADR – NAM – QUARTZ (PIN) – DÂY CAO SU">

                                                                    </a>




                                                                    <div class="vendoritem"><img width="60"
                                                                            height="60" class="lazyload"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/vendorimg_2.jpg?1710378319730"
                                                                            alt="G-Shock"></div>


                                                                    <input class="hidden" type="hidden" name="variantId"
                                                                        value="91048990">
                                                                    <div class="action">

                                                                        <button class="btn-cart btn-views add_to_cart "
                                                                            title="Mua ngay">
                                                                            Mua ngay
                                                                        </button>
                                                                        <a title="Xem nhanh"
                                                                            href="/g-shock-ga-1000-1adr-nam-quartz-pin-day-cao-su"
                                                                            data-handle="g-shock-ga-1000-1adr-nam-quartz-pin-day-cao-su"
                                                                            class="quick-view btn-views">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#fff"
                                                                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                        <a href="javascript:void(0)"
                                                                            class="setWishlist btn-wishlist btn-views"
                                                                            data-wish="g-shock-ga-1000-1adr-nam-quartz-pin-day-cao-su"
                                                                            tabindex="0" title="Thêm vào yêu thích">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#ffffff"
                                                                                    d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                    </div>
                                                                    <div class="tag-km">

                                                                        <span><img alt="Mới" width="60"
                                                                                height="60" class="lazyload"
                                                                                src="{{ asset('assets/images/' . $product->image) }}"
                                                                                data-src="{{ asset('assets/images/' . $product->image) }}">
                                                                            Mới</span>





                                                                        <span><img alt="Bán chạy" width="60"
                                                                                height="60" class="lazyload"
                                                                                src="{{ asset('assets/images/' . $product->image) }}"
                                                                                data-src="{{ asset('assets/images/' . $product->image) }}">
                                                                            Bán chạy</span>

                                                                    </div>

                                                                </div>

                                                                <div class="product-info">
                                                                    <h3 class="product-name"><a
                                                                            class="line-clamp line-clamp-2"
                                                                            href="/g-shock-ga-1000-1adr-nam-quartz-pin-day-cao-su"
                                                                            title="G-SHOCK GA-1000-1ADR – NAM – QUARTZ (PIN) – DÂY CAO SU">G-SHOCK
                                                                            GA-1000-1ADR – NAM – QUARTZ (PIN) – DÂY CAO
                                                                            SU</a></h3>
                                                                    <div class="price-box">
                                                                        8.576.000₫ </div>

                                                                    <div class="pro-promo line-clamp line-clamp-2">
                                                                        Tặng kèm gói bảo hành lên đến 5 năm</div>



                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>





                                                    <div class="swiper-slide"
                                                        style="width: 222.75px; margin-right: 15px;">
                                                        <div class=" item_product_main">


































































































                                                            <form action="/cart/add" method="post"
                                                                class="variants product-action" data-cart-form=""
                                                                data-id="product-actions-31449324"
                                                                enctype="multipart/form-data">
                                                                <div class="product-thumbnail">
                                                                    <a class="image_thumb scale_hover"
                                                                        href="/fossil-heritage-me3227-unisex-nam-nu-automatic-tu-dong-mat-so-38mm-kinh-cung-chong-nuoc-5atm"
                                                                        title="FOSSIL HERITAGE ME3227 – UNISEX (NAM/NỮ) – AUTOMATIC (TỰ ĐỘNG) – MẶT SỐ 38MM, KÍNH CỨNG, CHỐNG NƯỚC 5ATM">
                                                                        <img width="234" height="234"
                                                                            class="lazyload image1"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="//bizweb.dktcdn.net/thumb/large/100/487/743/products/me3227-699x699.png?v=1687060277060"
                                                                            alt="FOSSIL HERITAGE ME3227 – UNISEX (NAM/NỮ) – AUTOMATIC (TỰ ĐỘNG) – MẶT SỐ 38MM, KÍNH CỨNG, CHỐNG NƯỚC 5ATM">

                                                                    </a>

                                                                    <span class="smart">Giảm<br>
                                                                        8%
                                                                    </span>



                                                                    <div class="vendoritem"><img width="60"
                                                                            height="60" class="lazyload"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="{{ asset('assets/images/' . $product->image) }}"
                                                                            alt="Fossil"></div>


                                                                    <input class="hidden" type="hidden" name="variantId"
                                                                        value="91048466">
                                                                    <div class="action">

                                                                        <button class="btn-cart btn-views add_to_cart "
                                                                            title="Mua ngay">
                                                                            Mua ngay
                                                                        </button>
                                                                        <a title="Xem nhanh"
                                                                            href="/fossil-heritage-me3227-unisex-nam-nu-automatic-tu-dong-mat-so-38mm-kinh-cung-chong-nuoc-5atm"
                                                                            data-handle="fossil-heritage-me3227-unisex-nam-nu-automatic-tu-dong-mat-so-38mm-kinh-cung-chong-nuoc-5atm"
                                                                            class="quick-view btn-views">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#fff"
                                                                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                        <a href="javascript:void(0)"
                                                                            class="setWishlist btn-wishlist btn-views"
                                                                            data-wish="fossil-heritage-me3227-unisex-nam-nu-automatic-tu-dong-mat-so-38mm-kinh-cung-chong-nuoc-5atm"
                                                                            tabindex="0" title="Thêm vào yêu thích">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#ffffff"
                                                                                    d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                    </div>
                                                                    <div class="tag-km">

                                                                        <span><img alt="Mới" width="60"
                                                                                height="60" class="lazyload"
                                                                                src="{{ asset('assets/images/' . $product->image) }}"
                                                                                data-src="{{ asset('assets/images/' . $product->image) }}">
                                                                            Mới</span>





                                                                        <span><img alt="Bán chạy" width="60"
                                                                                height="60" class="lazyload"
                                                                                src="{{ asset('assets/images/' . $product->image) }}"
                                                                                data-src="{{ asset('assets/images/' . $product->image) }}">
                                                                            Bán chạy</span>

                                                                    </div>

                                                                </div>

                                                                <div class="product-info">
                                                                    <h3 class="product-name"><a
                                                                            class="line-clamp line-clamp-2"
                                                                            href="/fossil-heritage-me3227-unisex-nam-nu-automatic-tu-dong-mat-so-38mm-kinh-cung-chong-nuoc-5atm"
                                                                            title="FOSSIL HERITAGE ME3227 – UNISEX (NAM/NỮ) – AUTOMATIC (TỰ ĐỘNG) – MẶT SỐ 38MM, KÍNH CỨNG, CHỐNG NƯỚC 5ATM">FOSSIL
                                                                            HERITAGE ME3227 – UNISEX (NAM/NỮ) –
                                                                            AUTOMATIC (TỰ ĐỘNG) – MẶT SỐ 38MM, KÍNH
                                                                            CỨNG, CHỐNG NƯỚC 5ATM</a></h3>
                                                                    <div class="price-box">
                                                                        8.590.000₫
                                                                        <span class="compare-price">9.323.000₫</span>

                                                                    </div>

                                                                    <div class="pro-promo line-clamp line-clamp-2">Áp
                                                                        dụng chương trình giảm giá cho khách hàng là
                                                                        thành viên</div>



                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>



                                                    <div class="swiper-slide"
                                                        style="width: 222.75px; margin-right: 15px;">
                                                        <div class=" item_product_main">






















































































                                                            <form action="/cart/add" method="post"
                                                                class="variants product-action" data-cart-form=""
                                                                data-id="product-actions-31449294"
                                                                enctype="multipart/form-data">
                                                                <div class="product-thumbnail">
                                                                    <a class="image_thumb scale_hover"
                                                                        href="/casio-nu-quartz-pin-day-kim-loai-ltp-v001g-9budf"
                                                                        title="CASIO NỮ – QUARTZ (PIN) – DÂY KIM LOẠI (LTP-V001G-9BUDF)">
                                                                        <img width="234" height="234"
                                                                            class="lazyload image1"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="//bizweb.dktcdn.net/thumb/large/100/487/743/products/ltp-v001g-9budf-699x699.png?v=1687060043403"
                                                                            alt="CASIO NỮ – QUARTZ (PIN) – DÂY KIM LOẠI (LTP-V001G-9BUDF)">

                                                                    </a>




                                                                    <div class="vendoritem"><img width="60"
                                                                            height="60" class="lazyload"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/vendorimg_1.jpg?1710378319730"
                                                                            alt="Casio"></div>


                                                                    <input class="hidden" type="hidden" name="variantId"
                                                                        value="91048434">
                                                                    <div class="action">

                                                                        <button class="btn-cart btn-views add_to_cart "
                                                                            title="Mua ngay">
                                                                            Mua ngay
                                                                        </button>
                                                                        <a title="Xem nhanh"
                                                                            href="/casio-nu-quartz-pin-day-kim-loai-ltp-v001g-9budf"
                                                                            data-handle="casio-nu-quartz-pin-day-kim-loai-ltp-v001g-9budf"
                                                                            class="quick-view btn-views">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#fff"
                                                                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                        <a href="javascript:void(0)"
                                                                            class="setWishlist btn-wishlist btn-views"
                                                                            data-wish="casio-nu-quartz-pin-day-kim-loai-ltp-v001g-9budf"
                                                                            tabindex="0" title="Thêm vào yêu thích">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#ffffff"
                                                                                    d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                    </div>
                                                                    <div class="tag-km">

                                                                        <span><img alt="Mới" width="60"
                                                                                height="60" class="lazyload"
                                                                                src="{{ asset('assets/images/' . $product->image) }}"
                                                                                data-src="{{ asset('assets/images/' . $product->image) }}">
                                                                            Mới</span>





                                                                        <span><img alt="Bán chạy" width="60"
                                                                                height="60" class="lazyload"
                                                                                src="{{ asset('assets/images/' . $product->image) }}"
                                                                                data-src="{{ asset('assets/images/' . $product->image) }}">
                                                                            Bán chạy</span>

                                                                    </div>

                                                                </div>

                                                                <div class="product-info">
                                                                    <h3 class="product-name"><a
                                                                            class="line-clamp line-clamp-2"
                                                                            href="/casio-nu-quartz-pin-day-kim-loai-ltp-v001g-9budf"
                                                                            title="CASIO NỮ – QUARTZ (PIN) – DÂY KIM LOẠI (LTP-V001G-9BUDF)">CASIO
                                                                            NỮ – QUARTZ (PIN) – DÂY KIM LOẠI
                                                                            (LTP-V001G-9BUDF)</a></h3>
                                                                    <div class="price-box">
                                                                        1.140.000₫ </div>

                                                                    <div class="pro-promo line-clamp line-clamp-2">
                                                                        Miễn phí thay pin trọn đời cho tất cả khách hàng
                                                                    </div>



                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="section-recenview-product productRelate block-background">
                                        <div
                                            class="section_prd_feature swiper-container swiper_related recent-page-viewed">
                                            <div class="group_title_index">
                                                <h3 class="title">
                                                    <img alt="title"
                                                        src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/wristwatch.png?1710378319730">
                                                    <span class="title-name">Sản phẩm đã xem
                                                    </span>
                                                </h3>

                                            </div>

                                            <div class="sliderecenreview">
                                                <div
                                                    class="products product_related recent-viewed swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                                    <div class="swiper-wrapper"
                                                        style="transform: translate3d(0px, 0px, 0px);">




















































































                                                        <div class="swiper-slide swiper-slide-active"
                                                            style="width: 221.75px; margin-right: 15px;">
                                                            <form action="/cart/add" method="post"
                                                                class="variants product-action" data-cart-form=""
                                                                data-id="product-actions-31449366"
                                                                enctype="multipart/form-data">
                                                                <div class="product-thumbnail">
                                                                    <a class="image_thumb scale_hover"
                                                                        href="/seiko-srz520p1-nu-quartz-pin-mat-so-29mm-kinh-cung-chong-nuoc-5atm"
                                                                        title="{{ $product->title }}">
                                                                        <img width="234" height="234"
                                                                            class="lazyload image1"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="{{ asset('assets/images/' . $product->image) }}"
                                                                            alt="{{ $product->name }}">

                                                                    </a>





                                                                    <div class="vendoritem"><img width="60"
                                                                            height="60" class="lazyload"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="/{{ asset('assets/images/' . $product->image) }}"
                                                                            alt="Seiko"></div>


                                                                    <input class="hidden" type="hidden" name="variantId"
                                                                        value="91048622">
                                                                    <div class="action">

                                                                        <button class="btn-cart btn-views add_to_cart "
                                                                            title="Mua ngay">
                                                                            Mua ngay
                                                                        </button>
                                                                        <a title="Xem nhanh"
                                                                            href="/seiko-srz520p1-nu-quartz-pin-mat-so-29mm-kinh-cung-chong-nuoc-5atm"
                                                                            data-handle="seiko-srz520p1-nu-quartz-pin-mat-so-29mm-kinh-cung-chong-nuoc-5atm"
                                                                            class="quick-view btn-views">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#fff"
                                                                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                        <a href="javascript:void(0)"
                                                                            class="setWishlist btn-wishlist btn-views"
                                                                            data-wish="seiko-srz520p1-nu-quartz-pin-mat-so-29mm-kinh-cung-chong-nuoc-5atm"
                                                                            tabindex="0" title="Thêm vào yêu thích">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#ffffff"
                                                                                    d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                    </div>
                                                                    <div class="tag-km">

                                                                        <span><img alt="Mới" width="60"
                                                                                height="60" class="lazyload"
                                                                                src="{{ asset('assets/images/' . $product->image) }}"
                                                                                data-src="{{ asset('assets/images/' . $product->image) }}">
                                                                            Mới</span>





                                                                        <span><img alt="Bán chạy" width="60"
                                                                                height="60" class="lazyload"
                                                                                src="{{ asset('assets/images/' . $product->image) }}"
                                                                                data-src="{{ asset('assets/images/' . $product->image) }}">
                                                                            Bán chạy</span>

                                                                    </div>

                                                                </div>

                                                                <div class="product-info">
                                                                    <h3 class="product-name"><a
                                                                            class="line-clamp line-clamp-2"
                                                                            href="/seiko-srz520p1-nu-quartz-pin-mat-so-29mm-kinh-cung-chong-nuoc-5atm"
                                                                            title="SEIKO SRZ520P1 – NỮ – QUARTZ (PIN) – MẶT SỐ 29MM, KÍNH CỨNG, CHỐNG NƯỚC 5ATM">SEIKO
                                                                            SRZ520P1 – NỮ – QUARTZ (PIN) – MẶT SỐ 29MM,
                                                                            KÍNH CỨNG, CHỐNG NƯỚC 5ATM</a></h3>
                                                                    <div class="price-box">
                                                                        6.840.000₫ </div>


                                                                    <div class="pro-promo line-clamp line-clamp-2">Áp
                                                                        dụng chương trình giảm giá cho khách hàng là
                                                                        thành viên</div>



                                                                </div>

                                                            </form>
                                                        </div>






































































                                                        <div class="swiper-slide swiper-slide-next"
                                                            style="width: 221.75px; margin-right: 15px;">
                                                            <form action="/cart/add" method="post"
                                                                class="variants product-action" data-cart-form=""
                                                                data-id="product-actions-31449330"
                                                                enctype="multipart/form-data">
                                                                <div class="product-thumbnail">
                                                                    <a class="image_thumb scale_hover"
                                                                        href="/fossil-heritage-me3228-unisex-nam-nu-automatic-co-mat-so-38mm-tru-cot-40-gio-chong-nuoc-5atm"
                                                                        title="FOSSIL HERITAGE ME3228 – UNISEX (NAM/NỮ) – AUTOMATIC (CƠ) – MẶT SỐ 38MM, TRỮ CÓT 40 GIỜ, CHỐNG NƯỚC 5ATM">
                                                                        <img width="234" height="234"
                                                                            class="lazyload image1"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="{{ asset('assets/images/' . $product->image) }}"
                                                                            alt="FOSSIL HERITAGE ME3228 – UNISEX (NAM/NỮ) – AUTOMATIC (CƠ) – MẶT SỐ 38MM, TRỮ CÓT 40 GIỜ, CHỐNG NƯỚC 5ATM">

                                                                    </a>





                                                                    <div class="vendoritem"><img width="60"
                                                                            height="60" class="lazyload"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="{{ asset('assets/images/' . $product->image) }}"
                                                                            alt="Fossil"></div>


                                                                    <input class="hidden" type="hidden" name="variantId"
                                                                        value="91048520">
                                                                    <div class="action">

                                                                        <button class="btn-cart btn-views add_to_cart "
                                                                            title="Mua ngay">
                                                                            Mua ngay
                                                                        </button>
                                                                        <a title="Xem nhanh"
                                                                            href="/fossil-heritage-me3228-unisex-nam-nu-automatic-co-mat-so-38mm-tru-cot-40-gio-chong-nuoc-5atm"
                                                                            data-handle="fossil-heritage-me3228-unisex-nam-nu-automatic-co-mat-so-38mm-tru-cot-40-gio-chong-nuoc-5atm"
                                                                            class="quick-view btn-views">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#fff"
                                                                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                        <a href="javascript:void(0)"
                                                                            class="setWishlist btn-wishlist btn-views"
                                                                            data-wish="fossil-heritage-me3228-unisex-nam-nu-automatic-co-mat-so-38mm-tru-cot-40-gio-chong-nuoc-5atm"
                                                                            tabindex="0" title="Thêm vào yêu thích">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#ffffff"
                                                                                    d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                    </div>
                                                                    <div class="tag-km">

                                                                        <span><img alt="Mới" width="60"
                                                                                height="60" class="lazyload"
                                                                                src="{{ asset('assets/images/' . $product->image) }}"
                                                                                data-src="{{ asset('assets/images/' . $product->image) }}">
                                                                            Mới</span>





                                                                    </div>

                                                                </div>

                                                                <div class="product-info">
                                                                    <h3 class="product-name"><a
                                                                            class="line-clamp line-clamp-2"
                                                                            href="/fossil-heritage-me3228-unisex-nam-nu-automatic-co-mat-so-38mm-tru-cot-40-gio-chong-nuoc-5atm"
                                                                            title="FOSSIL HERITAGE ME3228 – UNISEX (NAM/NỮ) – AUTOMATIC (CƠ) – MẶT SỐ 38MM, TRỮ CÓT 40 GIỜ, CHỐNG NƯỚC 5ATM">FOSSIL
                                                                            HERITAGE ME3228 – UNISEX (NAM/NỮ) –
                                                                            AUTOMATIC (CƠ) – MẶT SỐ 38MM, TRỮ CÓT 40
                                                                            GIỜ, CHỐNG NƯỚC 5ATM</a></h3>
                                                                    <div class="price-box">
                                                                        8.590.000₫ </div>


                                                                    <div class="pro-promo line-clamp line-clamp-2">
                                                                        Tặng kèm gói bảo hành lên đến 5 năm</div>



                                                                </div>

                                                            </form>
                                                        </div>






























































































                                                        <div class="swiper-slide"
                                                            style="width: 221.75px; margin-right: 15px;">
                                                            <form action="/cart/add" method="post"
                                                                class="variants product-action" data-cart-form=""
                                                                data-id="product-actions-31449180"
                                                                enctype="multipart/form-data">
                                                                <div class="product-thumbnail">
                                                                    <a class="image_thumb scale_hover"
                                                                        href="/tissot-tradition-t063-617-36-037-00-nam-quartz-pin-mat-so-42-mm-chronograph-kinh-sapphire"
                                                                        title="TISSOT TRADITION T063.617.36.037.00 – NAM – QUARTZ (PIN) – MẶT SỐ 42 MM, CHRONOGRAPH, KÍNH SAPPHIRE">
                                                                        <img width="234" height="234"
                                                                            class="lazyload image1"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="//bizweb.dktcdn.net/thumb/large/100/487/743/products/t063-617-36-037-00-699x699.png?v=1687058742513"
                                                                            alt="TISSOT TRADITION T063.617.36.037.00 – NAM – QUARTZ (PIN) – MẶT SỐ 42 MM, CHRONOGRAPH, KÍNH SAPPHIRE">

                                                                    </a>

                                                                    <span class="smart">Giảm<br>
                                                                        20%
                                                                    </span>




                                                                    <div class="vendoritem"><img width="60"
                                                                            height="60" class="lazyload"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="{{ asset('assets/images/' . $product->image) }}"
                                                                            alt="TISSOT"></div>


                                                                    <input class="hidden" type="hidden" name="variantId"
                                                                        value="91048217">
                                                                    <div class="action">


                                                                        <a title="Xem nhanh"
                                                                            href="/tissot-tradition-t063-617-36-037-00-nam-quartz-pin-mat-so-42-mm-chronograph-kinh-sapphire"
                                                                            data-handle="tissot-tradition-t063-617-36-037-00-nam-quartz-pin-mat-so-42-mm-chronograph-kinh-sapphire"
                                                                            class="quick-view btn-views">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#fff"
                                                                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                        <a href="javascript:void(0)"
                                                                            class="setWishlist btn-wishlist btn-views"
                                                                            data-wish="tissot-tradition-t063-617-36-037-00-nam-quartz-pin-mat-so-42-mm-chronograph-kinh-sapphire"
                                                                            tabindex="0" title="Thêm vào yêu thích">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#ffffff"
                                                                                    d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                    </div>
                                                                    <div class="tag-km">

                                                                        <span><img alt="Mới" width="60"
                                                                                height="60" class="lazyload"
                                                                                src="{{ asset('assets/images/' . $product->image) }}"
                                                                                data-src="{{ asset('assets/images/' . $product->image) }}">
                                                                            Mới</span>





                                                                        <span><img alt="Bán chạy" width="60"
                                                                                height="60" class="lazyload"
                                                                                src="{{ asset('assets/images/' . $product->image) }}"
                                                                                data-src="{{ asset('assets/images/' . $product->image) }}">
                                                                            Bán chạy</span>

                                                                    </div>

                                                                </div>

                                                                <div class="product-info">
                                                                    <h3 class="product-name"><a
                                                                            class="line-clamp line-clamp-2"
                                                                            href="/tissot-tradition-t063-617-36-037-00-nam-quartz-pin-mat-so-42-mm-chronograph-kinh-sapphire"
                                                                            title="TISSOT TRADITION T063.617.36.037.00 – NAM – QUARTZ (PIN) – MẶT SỐ 42 MM, CHRONOGRAPH, KÍNH SAPPHIRE">TISSOT
                                                                            TRADITION T063.617.36.037.00 – NAM – QUARTZ
                                                                            (PIN) – MẶT SỐ 42 MM, CHRONOGRAPH, KÍNH
                                                                            SAPPHIRE</a></h3>
                                                                    <div class="price-box">
                                                                        14.700.000₫
                                                                        <span class="compare-price">18.300.000₫</span>

                                                                    </div>


                                                                    <div class="pro-promo line-clamp line-clamp-2">
                                                                        Miễn phí thay pin trọn đời cho tất cả khách hàng
                                                                    </div>



                                                                </div>

                                                            </form>
                                                        </div>

















































































                                                        <div class="swiper-slide"
                                                            style="width: 221.75px; margin-right: 15px;">
                                                            <form action="/cart/add" method="post"
                                                                class="variants product-action" data-cart-form=""
                                                                data-id="product-actions-31449259"
                                                                enctype="multipart/form-data">
                                                                <div class="product-thumbnail">
                                                                    <a class="image_thumb scale_hover"
                                                                        href="/g-shock-ga-2000-1a2dr-nam-kinh-cung-quartz-pin-mat-so-51-2mm-bo-bam-gio-chong-nuoc-20atm"
                                                                        title="G-SHOCK GA-2000-1A2DR – NAM – KÍNH CỨNG – QUARTZ (PIN) – MẶT SỐ 51.2MM, BỘ BẤM GIỜ, CHỐNG NƯỚC 20ATM">
                                                                        <img width="234" height="234"
                                                                            class="lazyload image1"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="//bizweb.dktcdn.net/thumb/large/100/487/743/products/53-ga-2000-1a2dr-699x699.png?v=1687059536243"
                                                                            alt="G-SHOCK GA-2000-1A2DR – NAM – KÍNH CỨNG – QUARTZ (PIN) – MẶT SỐ 51.2MM, BỘ BẤM GIỜ, CHỐNG NƯỚC 20ATM">

                                                                    </a>

                                                                    <span class="smart">Giảm<br>
                                                                        11%
                                                                    </span>




                                                                    <div class="vendoritem"><img width="60"
                                                                            height="60" class="lazyload"
                                                                            src="{{ asset('assets/images/' . $product->image) }}"
                                                                            data-src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/vendorimg_2.jpg?1710378319730"
                                                                            alt="G-Shock"></div>


                                                                    <input class="hidden" type="hidden"
                                                                        name="variantId" value="91048358">
                                                                    <div class="action">

                                                                        <button class="btn-cart btn-views add_to_cart "
                                                                            title="Mua ngay">
                                                                            Mua ngay
                                                                        </button>
                                                                        <a title="Xem nhanh"
                                                                            href="/g-shock-ga-2000-1a2dr-nam-kinh-cung-quartz-pin-mat-so-51-2mm-bo-bam-gio-chong-nuoc-20atm"
                                                                            data-handle="g-shock-ga-2000-1a2dr-nam-kinh-cung-quartz-pin-mat-so-51-2mm-bo-bam-gio-chong-nuoc-20atm"
                                                                            class="quick-view btn-views">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#fff"
                                                                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                        <a href="javascript:void(0)"
                                                                            class="setWishlist btn-wishlist btn-views"
                                                                            data-wish="g-shock-ga-2000-1a2dr-nam-kinh-cung-quartz-pin-mat-so-51-2mm-bo-bam-gio-chong-nuoc-20atm"
                                                                            tabindex="0" title="Thêm vào yêu thích">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 512 512">
                                                                                <path fill="#ffffff"
                                                                                    d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                    </div>
                                                                    <div class="tag-km">





                                                                        <span><img alt="Bán chạy" width="60"
                                                                                height="60" class="lazyload"
                                                                                src="{{ asset('assets/images/' . $product->image) }}"
                                                                                data-src="{{ asset('assets/images/' . $product->image) }}">
                                                                            Bán chạy</span>

                                                                    </div>

                                                                </div>

                                                                <div class="product-info">
                                                                    <h3 class="product-name"><a
                                                                            class="line-clamp line-clamp-2"
                                                                            href="/g-shock-ga-2000-1a2dr-nam-kinh-cung-quartz-pin-mat-so-51-2mm-bo-bam-gio-chong-nuoc-20atm"
                                                                            title="G-SHOCK GA-2000-1A2DR – NAM – KÍNH CỨNG – QUARTZ (PIN) – MẶT SỐ 51.2MM, BỘ BẤM GIỜ, CHỐNG NƯỚC 20ATM">G-SHOCK
                                                                            GA-2000-1A2DR – NAM – KÍNH CỨNG – QUARTZ
                                                                            (PIN) – MẶT SỐ 51.2MM, BỘ BẤM GIỜ, CHỐNG
                                                                            NƯỚC 20ATM</a></h3>
                                                                    <div class="price-box">
                                                                        4.638.000₫
                                                                        <span class="compare-price">5.200.000₫</span>

                                                                    </div>


                                                                    <div class="pro-promo line-clamp line-clamp-2">
                                                                        Miễn phí thay pin trọn đời cho tất cả khách hàng
                                                                    </div>



                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-pagination"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        if (localStorage.last_viewed_products != undefined) {
                                            jQuery('.recent-page-viewed').removeClass('d-none');
                                            var last_viewd_pro_array = JSON.parse(localStorage.last_viewed_products);
                                            var recentview_promises = [];
                                            var size_pro_review = last_viewd_pro_array.length;
                                            if (size_pro_review >= 14) {
                                                size_pro_review = 14;
                                            } else {
                                                size_pro_review = last_viewd_pro_array.length;
                                            }
                                            if (size_pro_review < 1) {
                                                jQuery('.recent-page-viewed').addClass('d-none');
                                            } else {
                                                jQuery('.recent-page-viewed').removeClass('d-none');
                                            }
                                            if (size_pro_review > 0) {
                                                for (i = 0; i < size_pro_review; i++) {
                                                    var alias_product = last_viewd_pro_array[i];
                                                    if (!!alias_product.alias) {
                                                        var promise = new Promise(function(resolve, reject) {
                                                            $.ajax({
                                                                url: '/' + alias_product.alias + '?view=viewed',
                                                                success: function(product) {
                                                                    resolve(product);

                                                                    $(document).ready(function() {

                                                                        var modal = $('.quickview-product');
                                                                        var btn = $('.quick-view');
                                                                        var span = $('.quickview-close');
                                                                        favoriBean.Wishlist.wishlistProduct();
                                                                        btn.click(function() {
                                                                            modal.show();
                                                                        });

                                                                        span.click(function() {
                                                                            modal.hide();
                                                                        });

                                                                        $(window).on('click', function(e) {
                                                                            if ($(e.target).is('.modal')) {
                                                                                modal.hide();
                                                                            }
                                                                        });
                                                                    });
                                                                },
                                                                error: function(err) {
                                                                    resolve('');
                                                                }
                                                            })
                                                        });
                                                        recentview_promises.push(promise);
                                                    }
                                                }
                                                Promise.all(recentview_promises).then(function(values) {
                                                        $.each(values, function(i, v) {
                                                            if (v != '') {
                                                                $('.recent-viewed .swiper-wrapper').append(v);
                                                            } else {
                                                                last_viewd_pro_array.splice(i, 1);
                                                            }
                                                        });
                                                        console.log('listLocalStorage', last_viewd_pro_array);
                                                        setTimeout(function() {
                                                            var swiper = new Swiper('.recent-viewed', {
                                                                slidesPerColumnFill: 'row',
                                                                direction: 'horizontal',
                                                                slidesPerView: 4,
                                                                spaceBetween: 20,
                                                                slidesPerGroup: 1,
                                                                slidesPerColumn: 1,
                                                                navigation: {
                                                                    nextEl: '.section-recenview-product .section-next',
                                                                    prevEl: '.section-recenview-product .section-prev',
                                                                },
                                                                breakpoints: {
                                                                    280: {
                                                                        slidesPerView: 2,
                                                                        spaceBetween: 15
                                                                    },
                                                                    640: {
                                                                        slidesPerView: 2,
                                                                        spaceBetween: 15
                                                                    },
                                                                    768: {
                                                                        slidesPerView: 3,
                                                                        spaceBetween: 15
                                                                    },
                                                                    992: {
                                                                        slidesPerView: 4,
                                                                        spaceBetween: 15
                                                                    },
                                                                    1024: {
                                                                        slidesPerView: 5,
                                                                        spaceBetween: 20
                                                                    }
                                                                }
                                                            });

                                                        }, 500);

                                                        localStorage.setItem('last_viewed_products', JSON.stringify(last_viewd_pro_array));
                                                        awe_lazyloadImage();

                                                    })
                                                    .catch(function(productId) {
                                                        const listLocalStorage = (JSON.parse(localStorage.getItem('last_viewed_products')));
                                                        for (let i = 0; i < listLocalStorage.length; ++i) {
                                                            if (listLocalStorage[i].id == productId) {
                                                                listLocalStorage.splice(i, 1);
                                                            }
                                                        }
                                                        console.log('listLocalStorage', listLocalStorage);
                                                        localStorage.setItem('last_viewed_products', JSON.stringify(listLocalStorage));
                                                    });

                                            }
                                        } else {
                                            jQuery('.section-recenview-product').addClass('d-none');
                                        }
                                    </script>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>



        <script>
            $(document).ready(function($) {
                var getLimit = 20;
                var product = {
                    "id": 31449366,
                    "name": "SEIKO SRZ520P1 – NỮ – QUARTZ (PIN) – MẶT SỐ 29MM, KÍNH CỨNG, CHỐNG NƯỚC 5ATM",
                    "alias": "seiko-srz520p1-nu-quartz-pin-mat-so-29mm-kinh-cung-chong-nuoc-5atm",
                    "vendor": "Seiko",
                    "type": null,
                    "content": "<h2><b>ĐẮM CHÌM TRONG VẺ ĐẸP SANG TRỌNG CỦA SEIKO SRZ520P1</b></h2>\n<p>Dù sáng lập năm 1881, nhưng mãi cho đến 1924 thương hiệu Seiko mới thật sự bước chân vào thị trường&nbsp;đồng hồ đeo tay. Lịch sử của hãng là những trang tự hào khi có thời điểm hãng vượt mặt cả những ông lớn đến từ Thụy Sỹ. Và cho đến nay, hãng vẫn là tập đoàn hàng đầu Nhật Bản.</p>\n<p>Chính vì vậy, kể từ khi bước vào thị trường Việt Nam, Seiko nhanh chóng hút khách bởi rất nhiều dòng sản phẩm nổi bật. Trong đó, phân khúc tầm trung được người dùng quan tâm nhất vì giá bán tốt, vẻ đẹp tương xứng và danh tiếng thì khỏi bàn.</p>\n<p><img alt=\"Đồng hồ Seiko SRZ520P1: Thiết kế mỏng, mạ vàng siêu bền bỉ - Ảnh 1\" data-src=\"https://cdn3.dhht.vn/wp-content/uploads/2019/06/seiko-srz520p1-nu-quartz-pin-day-kim-loai-1.jpg\" data-was-processed=\"true\" height=\"485\" src=\"https://cdn3.dhht.vn/wp-content/uploads/2019/06/seiko-srz520p1-nu-quartz-pin-day-kim-loai-1.jpg\" width=\"728\" /></p>\n<p><i>Chưa bao giờ thiết kế của Seiko trở nên thiếu đi sự tinh tế và sang trọng. Xem thêm:&nbsp;</i><i>Tổng hợp 15 mẫu đồng hồ Seiko giá rẻ nhất</i></p>\n<p>&nbsp;</p>\n<p>Không như các chàng trai luôn đắn đo nhiều yếu tố. Những chị em phụ nữ lại luôn ưu tiên ngoài hình đẹp, sang trọng và bắt mắt. Vì vậy, không quá khó hiểu khi Seiko SRZ520P1 lọt vào mắt xanh của nhiều chị em ngay từ cái nhìn đầu tiên.</p>\n<p>&nbsp;</p>\n<h3><b>1. MẶT KÍNH CỨNG VỚI CÔNG NGHỆ ĐỘC QUYỀN</b></h3>\n<p>Bất kể là&nbsp;đồng hồ nữ&nbsp;hay dành cho nam, Seiko thường rất ít khi sử dụng quá nhiều màu sắc nổi bật. Đối tượng chính mà Seiko SRZ520P1 hướng đến là những chị em trưởng thành. Do đó, sản phẩm tập trung thiết kế sao cho sang trọng, hào nhoáng nhưng cũng phải tinh tế và nữ tính nhất.</p>\n<p>Tất cả đều được Seiko tái hiện lại rất tốt trên phiên bản này. Cũng là đường cong của mặt số tròn với kích thước 29mm, hay các chữ số la mã trên. Nhưng dưới thương hiệu Seiko, vẻ đẹp toát lên mạnh mẽ khác biệt hoàn toàn với những thương hiệu trong cùng phân khúc.</p>\n<p><img alt=\"Đồng hồ Seiko SRZ520P1: Thiết kế mỏng, mạ vàng siêu bền bỉ - Ảnh 2\" data-src=\"https://cdn3.dhht.vn/wp-content/uploads/2019/06/seiko-srz520p1-nu-quartz-pin-day-kim-loai-2.jpg\" data-was-processed=\"true\" height=\"485\" src=\"https://cdn3.dhht.vn/wp-content/uploads/2019/06/seiko-srz520p1-nu-quartz-pin-day-kim-loai-2.jpg\" width=\"728\" /></p>\n<p><i>Thiết kế hào nhoáng, mạ vàng bóng bẩy nhưng không quá phô trương trên Seiko SRZ520P1</i></p>\n<p>&nbsp;</p>\n<p>Dưới nền trắng, từng cọc số múi giờ, cho đến các kim được phủ tông xanh đen. Mọi thứ mang đến trải nghiệm thị giác ấn tượng, bạn có thể nhanh chóng nắm bắt thời gian ở mọi góc nhìn chỉ với cái liếc mắt mà không cần quan sát trực tiếp.</p>\n<p>Không chạy theo xu hướng quá mỏng gây ảnh hưởng đến trải nghiệm sử dụng. Bộ khung của Seiko SRZ520P1 được làm bo cong với 2 lớp. Chất liệu thép không gỉ và&nbsp;công nghệ mạ vàng PVD&nbsp;giúp bạn có thể yên tâm về màu sắc vẫn sẽ luôn đẹp như ngày mới mua.</p>\n<p><img alt=\"Đồng hồ Seiko SRZ520P1: Thiết kế mỏng, mạ vàng siêu bền bỉ - Ảnh 3\" data-src=\"https://cdn3.dhht.vn/wp-content/uploads/2019/06/seiko-srz520p1-nu-quartz-pin-day-kim-loai-3.jpg\" data-was-processed=\"true\" height=\"485\" src=\"https://cdn3.dhht.vn/wp-content/uploads/2019/06/seiko-srz520p1-nu-quartz-pin-day-kim-loai-3.jpg\" width=\"728\" /></p>\n<p><i>Từng chất liệu đều được lựa chọn cẩn thận để tạo nên sự chắc chắn cho sản phẩm</i></p>\n<p>&nbsp;</p>\n<p>Nhắc đến lớp kính, nhiều người không khỏi bất ngờ khi dù cùng là&nbsp;đồng hồ kính cứng&nbsp;nhưng chất lượng của Seiko khác biệt hẳn so với phần còn lại. Đó là bởi hãng sử dụng công nghệ riêng cho sản phẩm của mình nhằm nâng cao độ bền và khả năng chống trầy xước.</p>\n<p>&nbsp;</p>\n<h3><b>2. DÂY ĐEO KIM LOẠI MẠ VÀNG SÁNG BÓNG</b></h3>\n<p>Để có thể giữ chân người dùng ở lại với sản phẩm lâu nhất, phần dây đeo đóng vai trò rất quan trọng. Do đó, Seiko lựa chọn&nbsp;dây đồng hồ kim loại&nbsp;để trang bị cho Seiko SRZ520P1. Và tất nhiên bộ dây không để người dùng thất vọng khi mang đến trải nghiệm tuyệt vời.</p>\n<p>Tương tự như nhiều mẫu&nbsp;đồng hồ dây kim loại&nbsp;trong phân khúc tầm trung khác, toàn bộ dây đeo trên phiên bản này được mạ một lớp vàng sang trọng và bóng bẩy. Điều này giúp dây đeo có tính liên kết và liền mặt so với thiết kế chung của sản phẩm.</p>\n<p><img alt=\"Đồng hồ Seiko SRZ520P1: Thiết kế mỏng, mạ vàng siêu bền bỉ - Ảnh 4\" data-src=\"https://cdn3.dhht.vn/wp-content/uploads/2019/06/seiko-srz520p1-nu-quartz-pin-day-kim-loai-4.jpg\" data-was-processed=\"true\" height=\"485\" src=\"https://cdn3.dhht.vn/wp-content/uploads/2019/06/seiko-srz520p1-nu-quartz-pin-day-kim-loai-4.jpg\" width=\"728\" /></p>\n<p><i>Bộ dây đeo kim loại được mạ vàng với công nghệ mới giúp tăng cường vẻ đẹp vốn hoàn mỹ nay trở nên hấp dẫn hơn&nbsp;</i></p>\n<p>&nbsp;</p>\n<p>Việc cấu tạo bằng các mắt xích trở thành lối thiết kế khá quen thuộc của dây kim loại hiện nay. Tuy nhiên tùy theo nhà sản xuất số lượng mắt xích có sự thay đổi, như trên Seiko SRZ520P1 chúng ta thấy có đến 5 hàng với những mắt xích vô cùng nhỏ.</p>\n<p>Nhờ đỏ bộ dây dù được làm từ kim loại cũng không tạo cảm giác đeo quá nặng nề hay khó chịu trên cổ tay người dùng. Ngược lại với thế mạnh về độ bền, tuổi thọ, khả năng sử dụng dưới nước cũng như sự&nbsp; thông thoáng. Đây chắc chắn là sự lựa chọn tuyệt vời mà bạn không nên bỏ qua.</p>\n<p>&nbsp;</p>\n<h3><b>3. CỖ MÁY PIN ĐẠT CHỨNG NHẬN TIÊU CHUẨN NHẬT BẢN</b></h3>\n<p>Dành cho những ai chưa biết&nbsp;thương hiệu đồng hồ&nbsp;Seiko là một trong số ít hãng có dây chuyền sản xuất&nbsp;bộ máy&nbsp;riêng. Lợi thế này giúp hãng có thể kiểm soát được nguyên liệu đầu vào cho đến chất lượng đầu ra cho từng sản phẩm của mình. Và Seiko SRZ520P1 cũng không ngoại lệ.</p>\n<p>Vì vậy, dù máy cơ hai dòng&nbsp;đồng hồ quartz, tất cả đều phải trải qua những khâu kiểm định vô cùng khắt khe với nhiều thử thách. Do đó, việc trên tay mẫu sản phẩm đạt chứng nhận tiêu chuẩn của Nhật Bản luôn là niềm ao ước của tất cả mọi người.</p>\n<p><img alt=\"Đồng hồ Seiko SRZ520P1: Thiết kế mỏng, mạ vàng siêu bền bỉ - Ảnh 5\" data-src=\"https://cdn3.dhht.vn/wp-content/uploads/2019/06/seiko-srz520p1-nu-quartz-pin-day-kim-loai-5.jpg\" data-was-processed=\"true\" height=\"485\" src=\"https://cdn3.dhht.vn/wp-content/uploads/2019/06/seiko-srz520p1-nu-quartz-pin-day-kim-loai-5.jpg\" width=\"728\" /></p>\n<p><i>Dòng máy pin tiếp tục chứng minh sự ổn định, tiện lợi và phù hợp dành cho các chị em phụ nữ sử dụng&nbsp;</i></p>\n<p>&nbsp;</p>\n<p>Điều này đặc biệt quan trọng với các chị em phụ nữ, đối tượng sử dụng thường không có quá nhiều kiến thức về máy móc đồng hồ. Tuy vậy, bạn cũng không nên quá lo lắng vì cơ chế cấu tạo của máy pin thường khá đơn giản nên sẽ không tốn nhiều thời gian, chi phí bảo dưỡng.</p>\n<p>Cỗ máy được trang bị viên pin đồng hồ Seiko đi cùng. Khoảng thời gian để người dùng có thể tận hưởng độ chính xác với sai số thấp sẽ là từ 2 đến 3 năm. Việc thay thế cũng diễn ra rất nhanh chóng bạn chỉ cần mang đến trung tâm bảo hành uy tín gần nhất sẽ được hỗ trợ lấy ngay trong ngày.</p>\n<p>&nbsp;</p>\n<h3><b>4. THOẢI MÁI MANG ĐI TẮM CÙNG SEIKO SRZ520P1</b></h3>\n<p>Không ít các dòng sản phẩm có mức giá cao trên chục triệu đồng hiện vẫn đang chỉ dừng ở mức tiêu chuẩn chống nước 3ATM. Do đó, việc Seiko SRZ520P1 nằm trong nhóm&nbsp;đồng hồ chống nước 5ATM&nbsp;sẽ hỗ trợ rất nhiều trong sinh hoạt và cuộc sống.</p>\n<p>&nbsp;</p>\n<h3><b>5. LÝ DO BẠN KHÔNG NÊN BỎ QUA SEIKO SRZ520P1</b></h3>\n<p><b>▶&nbsp;</b>Mẫu Seiko SRZ520P1 thuộc sản phẩm độc lập từ hãng đồng hồ Seiko Nhật Bản.</p>\n<p><b>▶&nbsp;</b>Vẻ đẹp vạn người mê với thiết kế sang trọng, lịch lãm được Seiko làm rất tốt ngay từ mặt số của sản phẩm.</p>\n<p><b>▶</b>&nbsp;Dây đeo không đơn thuần chỉ mang tác dụng đeo trên tay mà còn giúp chị em tự tin tôn lên làn da cùng tông màu mạ vàng.</p>\n<p><b>▶</b>&nbsp;Cỗ máy pin chưa bao giờ lỗi thời cũng là điểm mạnh của Seiko khi đạt tiêu chuẩn&nbsp;Japan Movt.</p>\n<p><b>▶</b>&nbsp;Tiêu chuẩn 5ATM cho phép bạn đi mưa lớn hoặc tắm rửa cùng Seiko SRZ520P1 mà không lo nước lọt vào trong.</p>\n<p>---</p>\n<p><strong>Thương Hiệu:</strong>&nbsp;Seiko</p>\n<p><strong>Số Hiệu Sản Phẩm:</strong>&nbsp;SRZ520P1</p>\n<p><strong>Xuất Xứ:</strong>&nbsp;Nhật Bản</p>\n<p><strong>Giới Tính:</strong>&nbsp;Nữ</p>\n<p><strong>Kính:</strong>&nbsp;Hardlex Crystal (Kính Cứng)</p>\n<p><strong>Máy:</strong>&nbsp;Quartz (Pin)</p>\n<p><strong>Bảo Hành Quốc Tế:</strong>&nbsp;1 Năm</p>\n<p><strong>Bảo Hành Tại Hải Triều:</strong>&nbsp;<strong>5 Năm</strong></p>\n<p><strong>Đường Kính Mặt Số:</strong>&nbsp;29 mm</p>\n<p><strong>Bề Dày Mặt Số:</strong>&nbsp;7.3 mm</p>\n<p><strong>Niềng:</strong>&nbsp;Thép Không Gỉ</p>\n<p><strong>Dây Đeo:</strong>&nbsp;Thép Không Gỉ</p>\n<p><strong>Màu Mặt Số:</strong>&nbsp;Trắng</p>\n<p><strong>Chống Nước:</strong>&nbsp;5 ATM</p>\n<p><strong>Chức Năng:</strong></p>",
                    "summary": null,
                    "template_layout": "product",
                    "available": true,
                    "tags": ["banchay", "km_Áp dụng chương trình giảm giá cho khách hàng là thành viên", "moi"],
                    "price": 6840000.0000,
                    "price_min": 6840000.0000,
                    "price_max": 6840000.0000,
                    "price_varies": false,
                    "compare_at_price": 0,
                    "compare_at_price_min": 0,
                    "compare_at_price_max": 0,
                    "compare_at_price_varies": false,
                    "variants": [{
                        "id": 91048622,
                        "barcode": null,
                        "sku": null,
                        "title": "Default Title",
                        "options": ["Default Title"],
                        "option1": "Default Title",
                        "option2": null,
                        "option3": null,
                        "available": true,
                        "taxable": false,
                        "price": 6840000.0000,
                        "compare_at_price": null,
                        "inventory_management": null,
                        "inventory_policy": "deny",
                        "inventory_quantity": 0,
                        "weight_unit": "g",
                        "weight": 0,
                        "requires_shipping": true,
                        "image": {
                            "src": "https://bizweb.dktcdn.net/100/487/743/products/59-srz520p1-699x699.png?v=1687060768163"
                        }
                    }],
                    "featured_image": {
                        "src": "https://bizweb.dktcdn.net/100/487/743/products/59-srz520p1-699x699.png?v=1687060768163"
                    },
                    "images": [{
                        "src": "https://bizweb.dktcdn.net/100/487/743/products/59-srz520p1-699x699.png?v=1687060768163"
                    }, {
                        "src": "{{ asset('assets/images/' . $product->image) }}"
                    }, {
                        "src": "{{ asset('assets/images/' . $product->image) }}"
                    }, {
                        "src": "https://bizweb.dktcdn.net/100/487/743/products/seiko-srz520p1-1-699x699.png?v=1687060772327"
                    }, {
                        "src": "https://bizweb.dktcdn.net/100/487/743/products/seiko-srz520p1-0-699x699.png?v=1687060774713"
                    }, {
                        "src": "https://bizweb.dktcdn.net/100/487/743/products/srz520p1-699x699.png?v=1687060775787"
                    }],
                    "options": ["Title"],
                    "created_on": "2023-06-18T10:59:26",
                    "modified_on": "2023-06-18T12:23:41",
                    "published_on": "2023-06-18T10:59:00"
                };
                var alias_pro = 'seiko-srz520p1-nu-quartz-pin-mat-so-29mm-kinh-cung-chong-nuoc-5atm';
                var array_list = [product];
                var list_viewed_pro_old = localStorage.getItem('last_viewed_products');
                var last_viewed_pro_new = "";
                if (list_viewed_pro_old == null || list_viewed_pro_old == '')
                    last_viewed_pro_new = array_list;
                else {
                    var list_viewed_pro_old = JSON.parse(localStorage.last_viewed_products);
                    list_viewed_pro_old.splice(20, 1);
                    for (i = 0; i < list_viewed_pro_old.length; i++) {
                        if (list_viewed_pro_old[i].alias == alias_pro) {
                            list_viewed_pro_old.splice(i, 1);
                            break;
                        }
                    }
                    list_viewed_pro_old.unshift(array_list[0]);
                    last_viewed_pro_new = list_viewed_pro_old;
                }
                localStorage.setItem('last_viewed_products', JSON.stringify(last_viewed_pro_new));
                var last_viewd_pro_array = JSON.parse(localStorage.last_viewed_products);
                var recentview_promises = [];
                var size_pro_review = last_viewd_pro_array.length;
                if (size_pro_review >= 20) {
                    size_pro_review = 20;
                } else {
                    size_pro_review = last_viewd_pro_array.length;
                }
            });
        </script>
    </div>
    <script>
        (function($) {
            "use strict";
            $.ajaxChimp = {
                responses: {
                    "We have sent you a confirmation email": 0,
                    "Please enter a valueggg": 1,
                    "An email address must contain a single @": 2,
                    "The domain portion of the email address is invalid (the portion after the @: )": 3,
                    "The username portion of the email address is invalid (the portion before the @: )": 4,
                    "This email address looks fake or invalid. Please enter a real email address": 5
                },
                translations: {
                    en: null
                },
                init: function(selector, options) {
                    $(selector).ajaxChimp(options)
                }
            };
            $.fn.ajaxChimp = function(options) {
                $(this).each(function(i, elem) {
                    var form = $(elem);
                    var email = form.find("input[type=email]");
                    var label = form.find("label[for=" + email.attr("id") + "]");
                    var settings = $.extend({
                        url: form.attr("action"),
                        language: "en"
                    }, options);
                    var url = settings.url.replace("/post?", "/post-json?").concat("&c=?");
                    form.attr("novalidate", "true");
                    email.attr("name", "EMAIL");
                    form.submit(function() {
                        var msg;

                        function successCallback(resp) {
                            if (resp.result === "success") {
                                msg = "We have sent you a confirmation email";
                                label.removeClass("error").addClass("valid");
                                email.removeClass("error").addClass("valid")
                            } else {
                                email.removeClass("valid").addClass("error");
                                label.removeClass("valid").addClass("error");
                                var index = -1;
                                try {
                                    var parts = resp.msg.split(" - ", 2);
                                    if (parts[1] === undefined) {
                                        msg = resp.msg
                                    } else {
                                        var i = parseInt(parts[0], 10);
                                        if (i.toString() === parts[0]) {
                                            index = parts[0];
                                            msg = parts[1]
                                        } else {
                                            index = -1;
                                            msg = resp.msg
                                        }
                                    }
                                } catch (e) {
                                    index = -1;
                                    msg = resp.msg
                                }
                            }
                            if (settings.language !== "en" && $.ajaxChimp.responses[msg] !==
                                undefined && $.ajaxChimp.translations && $.ajaxChimp.translations[
                                    settings.language] && $.ajaxChimp.translations[settings
                                    .language][$.ajaxChimp.responses[msg]]) {
                                msg = $.ajaxChimp.translations[settings.language][$.ajaxChimp
                                    .responses[msg]
                                ]
                            }
                            label.html(msg);
                            label.show(2e3);
                            if (settings.callback) {
                                settings.callback(resp)
                            }
                        }
                        var data = {};
                        var dataArray = form.serializeArray();
                        $.each(dataArray, function(index, item) {
                            data[item.name] = item.value
                        });
                        $.ajax({
                            url: url,
                            data: data,
                            success: successCallback,
                            dataType: "jsonp",
                            error: function(resp, text) {
                                console.log("mailchimp ajax submit error: " + text)
                            }
                        });
                        var submitMsg = "Submitting...";
                        if (settings.language !== "en" && $.ajaxChimp.translations && $.ajaxChimp
                            .translations[settings.language] && $.ajaxChimp.translations[settings
                                .language]["submit"]) {
                            submitMsg = $.ajaxChimp.translations[settings.language]["submit"]
                        }
                        label.html(submitMsg).show(2e3);
                        return false
                    })
                });
                return this
            }
        })(jQuery);
    </script>
@endsection
