<div class="row row-fix">
    @foreach ($products as $product)
        <div class="col-xl-20 col-lg-3 col-sm-4 col-6 col-fix">
            <div class="product-grid">
                <form action="cart/add" method="post" class="variants product-action" data-cart-form
                    data-id="product-actions-{{ $product->id }}" enctype="multipart/form-data">
                    <div class="product-thumbnail">
                        <a class="image_thumb scale_hover" href="{{ route('detail', ['slug' => $product->slug]) }}"
                            title="{{ $product->slug }}">
                            <img width="234" height="234" class="lazyload image1"
                                src="assets/100/487/743/themes/912230/assets/lazy.png?1710378319730"
                                data-src="assets/thumb/large/100/487/743/products/ga-1000-1adr-699x699.png?v=1687061856183"
                                alt="{{ $product->slug }}">
                        </a>

                        <div class="vendoritem">
                            <img width="60" height="60" class="lazyload"
                                src="assets/100/487/743/themes/912230/assets/lazy.png?1710378319730"
                                data-src="assets/100/487/743/themes/912230/assets/vendorimg_2.jpg?1710378319730"
                                alt="G-Shock">
                        </div>

                        <input class="hidden" type="hidden" name="variantId" value="91048990" />
                        <div class="action">
                            <button class="btn-cart btn-views add_to_cart" title="Tùy chọn"
                                data-product-id="{{ $product->id }}" data-toggle="modal"
                                data-target="#popup-cart-mobile-{{ $product->id }}"
                                data-product-name="{{ $product->name }}" data-product-price="{{ $product->price }}">
                                Tùy chọn
                            </button>
                            <a title="Xem nhanh" href="g-shock-ga-1000-1adr-nam-quartz-pin-day-cao-su"
                                data-handle="g-shock-ga-1000-1adr-nam-quartz-pin-day-cao-su"
                                class="quick-view btn-views">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#fff"
                                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                </svg>
                            </a>
                            <a href="javascript:void(0)" class="setWishlist btn-wishlist btn-views"
                                data-wish="g-shock-ga-1000-1adr-nam-quartz-pin-day-cao-su" tabindex="0"
                                title="Thêm vào yêu thích">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#ffffff"
                                        d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="tag-km">
                            <span><img alt="Mới" width="60" height="60" class="lazyload"
                                    src="assets/100/487/743/themes/912230/assets/lazy.png?1710378319730"
                                    data-src="assets/100/487/743/themes/912230/assets/title_image_1_tag.png?1710378319730">
                                Mới</span>
                            <span><img alt="Bán chạy" width="60" height="60" class="lazyload"
                                    src="assets/100/487/743/themes/912230/assets/lazy.png?1710378319730"
                                    data-src="assets/100/487/743/themes/912230/assets/title_image_3_tag.png?1710378319730">
                                Bán chạy</span>
                        </div>
                    </div>

                    <div class="product-info">
                        <h3 class="product-name">
                            <a class="line-clamp line-clamp-2" href="{{ $product->url }}"
                                title="{{ $product->title }}">{{ $product->name }}</a>
                        </h3>

                        <div class="price-box">
                            @if ($product->pricesale)
                                <span class="new-price">{{ $product->pricesale }} ₫</span>
                                <span class="old-price text-secondary"
                                    style="font-size: 12px;"><del>{{ $product->price }} ₫</del></span>
                            @else
                                <span>{{ $product->price }} ₫</span>
                            @endif
                        </div>

                        <div class="pro-promo line-clamp line-clamp-2">Tặng kèm gói bảo hành lên đến 5 năm</div>
                    </div>
                </form>

            </div>

        </div>
        <div class="modal fade" id="popup-cart-mobile" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-dark text-white">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Xác nhận mua hàng</h5>
                    </div>
                    <div class="modal-body">
                        <!-- Hiển thị thông tin sản phẩm trong modal -->
                        <div class="header-popcart">
                            <div class="top-cart-header">
                                <div class="media-content bodycart-mobile">
                                    <div class="thumb-1x1">
                                        <img id="modal-product-image"
                                            src="{{ asset('assets/images/' . $product->image) }}"
                                            alt="{{ $product->image }}">
                                    </div>
                                    <div class="body_content">
                                        <h4 class="product-title" id="modal-product-name">{{ $product->name }}</h4>
                                        <div class="product-new-price"><b
                                                id="modal-product-price">{{ $product->price }}</b> VNĐ<span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($products as $product)
                        <div class="modal fade" id="popup-cart-mobile-{{ $product->id }}" tabindex="-1"
                            role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"
                            data-product-slug="{{ $product->slug }}">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-dark text-white">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Xác nhận mua hàng</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="header-popcart">
                                            <div class="top-cart-header">
                                                <div class="media-content bodycart-mobile">
                                                    <div class="thumb-1x1">
                                                        <img src="{{ asset('assets/images/' . $product->image) }}"
                                                            alt="{{ $product->image }}">
                                                    </div>
                                                    <div class="body_content">
                                                        <h4 class="product-title">{{ $product->name }}</h4>
                                                        <div class="product-new-price"><b>{{ $product->price }}</b>
                                                            VNĐ<span></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <p>Bạn có chắc chắn muốn thêm sản phẩm này vào giỏ hàng?</p>
                                        <button type="button" class="btn btn-danger close-modal text-light"
                                            data-dismiss="modal">Hủy</button>
                                        <!-- Thêm vào giỏ hàng -->
                                        <a href="{{ route('cart') }}" class="btn btn-warning text-light">Thêm vào giỏ
                                            hàng</a>
                                        <!-- Mua ngay -->
                                        <a href="{{ route('detail', ['slug' => $product->slug]) }}"
                                            class="btn btn-dark text-light">Mua ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
</div>
