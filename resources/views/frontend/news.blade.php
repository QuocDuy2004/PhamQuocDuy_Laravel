@extends('layouts.app')
@section('title', 'Tin tức')
@section('content')
    <div class="bodywrap">
        <section class="bread-crumb"
            style="background: linear-gradient(0deg, rgba(0,0,0,0.8), rgba(0,0,0,0.3)),  url(//bizweb.dktcdn.net/100/487/743/themes/912230/assets/breadcrumb.jpg?1710378319730) no-repeat center;">

            <div class="container">
                <div class="title-bread-crumb">

                    Tin tức

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
                    <li><strong><span>Tin tức</span></strong></li>
                </ul>
            </div>
        </section>
        <div class="blog_wrapper layout-blog" itemscope="" itemtype="https://schema.org/Blog">
            <meta itemprop="name" content="Tin tức">
            <meta itemprop="description" content="">
            <div class="container">
                <h1 class="title-page d-none">
                    <span>Tin tức</span>
                </h1>
                <div class="row">
                    <div class="col-12">
                        <section class="section_blog">
                            <div class="block-background">
                                <div class="group_title_index">
                                    <h3 class="title">
                                        <img alt="title"
                                            src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/wristwatch.png?1710378319730">
                                        <a class="title-name" href="tin-tuc" title="Tin tức nổi bật">Tin tức nổi bật
                                        </a>
                                    </h3>

                                </div>
                                <div class="row">
                                    @php
                                        // Lấy bài viết mới nhất
                                        $latestPost = \App\Models\Post::latest()->first();
                                        // Lấy bài viết thứ hai mới nhất
                                        $secondLatestPost = \App\Models\Post::latest()->skip(1)->first();
                                    @endphp

                                    <div class="col-lg-6">
                                        <div class="item-blog-big">
                                            <div class="block-thumb">
                                                <a class="thumb" href="{{ $latestPost->url }}"
                                                    title="{{ $latestPost->title }}">
                                                    <img width="400" height="240" class="lazyload loaded"
                                                        src="{{ asset('assets/images/' . $latestPost->image) }}"
                                                        alt="{{ $latestPost->title }}" data-was-processed="true">
                                                </a>
                                            </div>
                                            <div class="block-content">
                                                <h3>
                                                    <a class="line-clamp line-clamp-1" href="{{ $latestPost->url }}"
                                                        title="{{ $latestPost->title }}">{{ $latestPost->title }}</a>
                                                </h3>
                                                <div class="time-post">
                                                    Ngày đăng: <span>{{ $latestPost->created_at->format('d/m/Y') }}</span>
                                                </div>
                                                <p class="justify line-clamp line-clamp-3">{{ $latestPost->description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="item-blog-small">
                                            <div class="block-thumb">
                                                <a class="thumb" href="{{ $secondLatestPost->url }}"
                                                    title="{{ $secondLatestPost->title }}">
                                                    <img width="140" height="75" class="lazyload"
                                                        src="{{ asset('assets/images/' . $secondLatestPost->image) }}"
                                                        alt="{{ $secondLatestPost->title }}">
                                                </a>
                                            </div>
                                            <div class="block-content">
                                                <h3>
                                                    <a class="line-clamp line-clamp-2" href="{{ $secondLatestPost->url }}"
                                                        title="{{ $secondLatestPost->title }}">{{ $secondLatestPost->title }}</a>
                                                </h3>
                                                <p class="justify line-clamp line-clamp-2">
                                                    {{ $secondLatestPost->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var swiper = new Swiper('.blog-noibat-slider', {
                autoplay: {
                    delay: 6000,
                },
                loop: true,
                speed: 1000,
                pagination: {
                    el: '.home-slider .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.home-slider .swiper-button-next',
                    prevEl: '.home-slider .swiper-button-prev',
                },
            });
        </script>
    </div>


@endsection
