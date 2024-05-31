@extends('layouts.app')
@section('title', 'Sản phẩm')

@section('content')
<section class="section_product_tab">
    <div class="container">
        <div class="block-product block-background">
            <div class="row">
                <div class="col-12 e-tabs not-dqtab ajax-tab-1" data-section="ajax-tab-1" data-view="grid_4">
                    <ul class="tabs tabs-title tab-desktop ajax clearfix">
                        <li class="tab-link has-content" data-tab="tab-1" data-url="san-pham-moi">
                            <span title="Sản phẩm mới">
                                <img width="60" height="60" class="lazyload"
                                    src="{{ asset('assets/100/487/743/themes/912230/assets/title_image_1_tag.png?1710378319730') }}"
                                    alt="Sản phẩm mới">
                                Sản phẩm mới
                            </span>
                        </li>
                        <li class="tab-link" data-tab="tab-2" data-url="san-pham-noi-bat">
                            <span title="Sản phẩm nổi bật">
                                <img width="60" height="60" class="lazyload"
                                    src="{{ asset('assets/100/487/743/themes/912230/assets/title_image_2_tag.png?1710378319730') }}"
                                    alt="Sản phẩm nổi bật">
                                Sản phẩm nổi bật
                            </span>
                        </li>
                        <li class="tab-link" data-tab="tab-3" data-url="san-pham-ban-chay">
                            <span title="Sản phẩm bán chạy">
                                <img width="60" height="60" class="lazyload"
                                    src="{{ asset('assets/100/487/743/themes/912230/assets/title_image_3_tag.png?1710378319730') }}"
                                    alt="Sản phẩm bán chạy">
                                Sản phẩm bán chạy
                            </span>
                        </li>
                    </ul>

                    <!-- Tab contents -->
                    <div class="tab-1 tab-content">
                        <div class="row row-fix">
                            @foreach ($data as $product)
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 col-fix">
                                    <div class="product-item">
                                        <form action="{{ route('cart.add', $product->id) }}" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-{{ $product->id }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="{{ route('detail', $product->slug) }}"
                                                    title="{{ $product->name }}">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="{{ asset('assets/100/487/743/themes/912230/assets/' . $product->image . '?1710378319730') }}"
                                                        data-src="{{ $product->image_url }}"
                                                        alt="{{ $product->name }}">
                                                </a>
                                                <div class="vendoritem">
                                                    <img width="60" height="60" class="lazyload"
                                                        src="{{ asset('assets/100/487/743/themes/912230/assets/vendorimg_5.jpg?1710378319730') }}"
                                                        alt="Vendor Image">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId" value="{{ $product->variant_id }}" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views" title="Tùy chọn" type="button"
                                                        onclick="window.location.href='{{ route('detail', $product->slug) }}'">
                                                        Tùy chọn
                                                    </button>
                                                    <a title="Xem nhanh" href="{{ route('detail', $product->slug) }}"
                                                        class="quick-view btn-views">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path fill="#fff"
                                                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                                        </svg>
                                                    </a>
                                                    <a href="javascript:void(0)" class="setWishlist btn-wishlist btn-views"
                                                        data-wish="{{ route('detail', $product->slug) }}" tabindex="0"
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
                                                            src="{{ asset('assets/100/487/743/themes/912230/assets/title_image_1_tag.png?1710378319730') }}">
                                                        Mới</span>
                                                    <span><img alt="Bán chạy" width="60" height="60" class="lazyload"
                                                            src="{{ asset('assets/100/487/743/themes/912230/assets/title_image_3_tag.png?1710378319730') }}">
                                                        Bán chạy</span>
                                                </div>
                                            </div>

                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp"
                                                        href="{{ route('detail', $product->slug) }}" title="{{ $product->name }}">
                                                        {{ $product->name }}
                                                    </a></h3>
                                                <span>{{ $product->detail }}</span>
                                                <div class="price-box">
                                                    {{ number_format($product->price, 0, ',', '.') }}₫
                                                </div>
                                                <del class="line-clamp text-end p-2">{{ number_format($product->pricesale, 0, ',', '.') }}₫</del>
                                                <div class="pro-promo line-clamp line-clamp-2">
                                                    {{ $product->description }}
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
