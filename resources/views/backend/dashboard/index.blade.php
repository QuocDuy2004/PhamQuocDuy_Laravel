@extends('layouts.appadmin')
@section('title', 'Dashboard')

@section('content')
    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="row gy-4">
                <!-- Congratulations card -->
                <div class="col-md-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-1">Xin chào {{ $hello->name }} 🎉</h4>
                            <p class="pb-0">Best seller of the month</p>
                            <h4 class="text-primary mb-1">$42.8k</h4>
                            <p class="mb-2 pb-1">78% of target 🚀</p>
                            <a href="javascript:;" class="btn btn-sm btn-primary waves-effect waves-light">View Sales</a>
                        </div>
                        <img src="../themes/img/icons/misc/triangle-light.png"
                            class="scaleX-n1-rtl position-absolute bottom-0 end-0" width="166" alt="triangle background">
                        <img src="../themes/img/illustrations/trophy.png"
                            class="scaleX-n1-rtl position-absolute bottom-0 end-0 me-4 mb-4 pb-2" width="83"
                            alt="view sales">
                    </div>
                </div>
                <!--/ Congratulations card -->

                <!-- Transactions -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="card-title m-0 me-2">Thống kê hệ thống</h5>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Update</a>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3"><span class="fw-medium">Total 48.5% growth</span> 😎 this
                                month</p>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar">
                                            <div class="avatar-initial bg-primary rounded shadow">
                                                <i class="mdi mdi-trending-up mdi-24px"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <div class="small mb-1">Giảm giá</div>
                                            <h5 class="mb-0">245k</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar">
                                            <div class="avatar-initial bg-success rounded shadow">
                                                <i class="mdi mdi-account-outline mdi-24px"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <div class="small mb-1">Thành viên</div>
                                            <h5 class="mb-0">12.5k</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar">
                                            <div class="avatar-initial bg-warning rounded shadow">
                                                <i class="mdi mdi-cellphone-link mdi-24px"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <div class="small mb-1">Sản phẩm</div>
                                            <h5 class="mb-0">1.54k</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar">
                                            <div class="avatar-initial bg-info rounded shadow">
                                                <i class="mdi mdi-currency-usd mdi-24px"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <div class="small mb-1">Doanh thu</div>
                                            <h5 class="mb-0">$88k</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Transactions -->

                <!-- Weekly Overview Chart -->
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-1">Tổng quan hàng tuần</h5>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="weeklyOverviewDropdown"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklyOverviewDropdown">
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Update</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="position: relative;">
                            <div id="weeklyOverviewChart" style="min-height: 200px;">
                                <div id="apexchartskblnq8z9"
                                    class="apexcharts-canvas apexchartskblnq8z9 apexcharts-theme-light"
                                    style="width: 367px; height: 200px;"><svg id="SvgjsSvg1001" width="367"
                                        height="200" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                        transform="translate(-16, -9)" style="background: transparent;">
                                        <g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(69.50684928894043, 30)">
                                            <defs id="SvgjsDefs1002">
                                                <linearGradient id="SvgjsLinearGradient1007" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1008" stop-opacity="0.4"
                                                        stop-color="rgba(216,227,240,0.4)" offset="0">
                                                    </stop>
                                                    <stop id="SvgjsStop1009" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1">
                                                    </stop>
                                                    <stop id="SvgjsStop1010" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1">
                                                    </stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMaskkblnq8z9">
                                                    <rect id="SvgjsRect1012" width="310.7170524597168" height="165"
                                                        x="-17.223901748657227" y="0" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskkblnq8z9"></clipPath>
                                                <clipPath id="nonForecastMaskkblnq8z9"></clipPath>
                                                <clipPath id="gridRectMarkerMaskkblnq8z9">
                                                    <rect id="SvgjsRect1013" width="280.26924896240234" height="169"
                                                        x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect1011" width="13.813462448120116" height="165" x="0"
                                                y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke-dasharray="3" fill="url(#SvgjsLinearGradient1007)"
                                                class="apexcharts-xcrosshairs" y2="165" filter="none"
                                                fill-opacity="0.9"></rect>
                                            <g id="SvgjsG1032" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1033" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG1051" class="apexcharts-grid">
                                                <g id="SvgjsG1052" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1054" x1="-15.223901748657227" y1="0"
                                                        x2="291.49315071105957" y2="0" stroke="#e7e7e8"
                                                        stroke-dasharray="8" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1055" x1="-15.223901748657227" y1="55"
                                                        x2="291.49315071105957" y2="55" stroke="#e7e7e8"
                                                        stroke-dasharray="8" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1056" x1="-15.223901748657227" y1="110"
                                                        x2="291.49315071105957" y2="110" stroke="#e7e7e8"
                                                        stroke-dasharray="8" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1057" x1="-15.223901748657227" y1="165"
                                                        x2="291.49315071105957" y2="165" stroke="#e7e7e8"
                                                        stroke-dasharray="8" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1053" class="apexcharts-gridlines-vertical">
                                                </g>
                                                <line id="SvgjsLine1059" x1="0" y1="165"
                                                    x2="276.26924896240234" y2="165" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1058" x1="0" y1="1" x2="0"
                                                    y2="165" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1014" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG1015" class="apexcharts-series" rel="1"
                                                    seriesName="Sales" data:realIndex="0">
                                                    <path id="SvgjsPath1019"
                                                        d="M-6.906731224060058 157L-6.906731224060058 114.33333333333333C-6.906731224060058 109 -4.24006455739339 106.33333333333333 1.0932687759399418 106.33333333333333L-1.0932687759399418 106.33333333333333C4.240064557393391 106.33333333333333 6.906731224060058 109 6.906731224060058 114.33333333333333L6.906731224060058 114.33333333333333L6.906731224060058 157C6.906731224060058 162.33333333333334 4.24006455739339 165 -1.0932687759399418 165C-1.0932687759399418 165 1.0932687759399418 165 1.0932687759399418 165C-4.240064557393391 165 -6.906731224060058 162.33333333333334 -6.906731224060058 157C-6.906731224060058 157 -6.906731224060058 157 -6.906731224060058 157 "
                                                        fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskkblnq8z9)"
                                                        pathTo="M -6.906731224060058 157L -6.906731224060058 114.33333333333333Q -6.906731224060058 106.33333333333333 1.0932687759399418 106.33333333333333L -1.0932687759399418 106.33333333333333Q 6.906731224060058 106.33333333333333 6.906731224060058 114.33333333333333L 6.906731224060058 114.33333333333333L 6.906731224060058 157Q 6.906731224060058 165 -1.0932687759399418 165L 1.0932687759399418 165Q -6.906731224060058 165 -6.906731224060058 157z"
                                                        pathFrom="M -6.906731224060058 157L -6.906731224060058 157L 6.906731224060058 157L 6.906731224060058 157L 6.906731224060058 157L 6.906731224060058 157L 6.906731224060058 157L -6.906731224060058 157"
                                                        cy="106.33333333333333" cx="6.906731224060058" j="0"
                                                        val="32" barHeight="58.66666666666667"
                                                        barWidth="13.813462448120116"></path>
                                                    <path id="SvgjsPath1021"
                                                        d="M39.138143603006995 157L39.138143603006995 72.16666666666666C39.138143603006995 66.83333333333333 41.80481026967366 64.16666666666666 47.138143603006995 64.16666666666666L44.951606051127115 64.16666666666666C50.28493938446045 64.16666666666666 52.951606051127115 66.83333333333333 52.951606051127115 72.16666666666666L52.951606051127115 72.16666666666666L52.951606051127115 157C52.951606051127115 162.33333333333334 50.28493938446045 165 44.951606051127115 165C44.951606051127115 165 47.138143603006995 165 47.138143603006995 165C41.80481026967366 165 39.138143603006995 162.33333333333334 39.138143603006995 157C39.138143603006995 157 39.138143603006995 157 39.138143603006995 157 "
                                                        fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskkblnq8z9)"
                                                        pathTo="M 39.138143603006995 157L 39.138143603006995 72.16666666666666Q 39.138143603006995 64.16666666666666 47.138143603006995 64.16666666666666L 44.951606051127115 64.16666666666666Q 52.951606051127115 64.16666666666666 52.951606051127115 72.16666666666666L 52.951606051127115 72.16666666666666L 52.951606051127115 157Q 52.951606051127115 165 44.951606051127115 165L 47.138143603006995 165Q 39.138143603006995 165 39.138143603006995 157z"
                                                        pathFrom="M 39.138143603006995 157L 39.138143603006995 157L 52.951606051127115 157L 52.951606051127115 157L 52.951606051127115 157L 52.951606051127115 157L 52.951606051127115 157L 39.138143603006995 157"
                                                        cy="64.16666666666666" cx="52.951606051127115" j="1"
                                                        val="55" barHeight="100.83333333333334"
                                                        barWidth="13.813462448120116"></path>
                                                    <path id="SvgjsPath1023"
                                                        d="M85.18301843007406 157L85.18301843007406 90.5C85.18301843007406 85.16666666666667 87.84968509674073 82.5 93.18301843007406 82.5L90.99648087819418 82.5C96.3298142115275 82.5 98.99648087819418 85.16666666666667 98.99648087819418 90.5L98.99648087819418 90.5L98.99648087819418 157C98.99648087819418 162.33333333333334 96.3298142115275 165 90.99648087819418 165C90.99648087819418 165 93.18301843007406 165 93.18301843007406 165C87.84968509674073 165 85.18301843007406 162.33333333333334 85.18301843007406 157C85.18301843007406 157 85.18301843007406 157 85.18301843007406 157 "
                                                        fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskkblnq8z9)"
                                                        pathTo="M 85.18301843007406 157L 85.18301843007406 90.5Q 85.18301843007406 82.5 93.18301843007406 82.5L 90.99648087819418 82.5Q 98.99648087819418 82.5 98.99648087819418 90.5L 98.99648087819418 90.5L 98.99648087819418 157Q 98.99648087819418 165 90.99648087819418 165L 93.18301843007406 165Q 85.18301843007406 165 85.18301843007406 157z"
                                                        pathFrom="M 85.18301843007406 157L 85.18301843007406 157L 98.99648087819418 157L 98.99648087819418 157L 98.99648087819418 157L 98.99648087819418 157L 98.99648087819418 157L 85.18301843007406 157"
                                                        cy="82.5" cx="98.99648087819418" j="2" val="45"
                                                        barHeight="82.5" barWidth="13.813462448120116"></path>
                                                    <path id="SvgjsPath1025"
                                                        d="M131.22789325714112 157L131.22789325714112 35.5C131.22789325714112 30.166666666666657 133.89455992380778 27.5 139.22789325714112 27.5L137.04135570526122 27.5C142.37468903859457 27.5 145.04135570526122 30.166666666666657 145.04135570526122 35.5L145.04135570526122 35.5L145.04135570526122 157C145.04135570526122 162.33333333333334 142.37468903859457 165 137.04135570526122 165C137.04135570526122 165 139.22789325714112 165 139.22789325714112 165C133.89455992380778 165 131.22789325714112 162.33333333333334 131.22789325714112 157C131.22789325714112 157 131.22789325714112 157 131.22789325714112 157 "
                                                        fill="rgba(144,85,253,0.85)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskkblnq8z9)"
                                                        pathTo="M 131.22789325714112 157L 131.22789325714112 35.5Q 131.22789325714112 27.5 139.22789325714112 27.5L 137.04135570526122 27.5Q 145.04135570526122 27.5 145.04135570526122 35.5L 145.04135570526122 35.5L 145.04135570526122 157Q 145.04135570526122 165 137.04135570526122 165L 139.22789325714112 165Q 131.22789325714112 165 131.22789325714112 157z"
                                                        pathFrom="M 131.22789325714112 157L 131.22789325714112 157L 145.04135570526122 157L 145.04135570526122 157L 145.04135570526122 157L 145.04135570526122 157L 145.04135570526122 157L 131.22789325714112 157"
                                                        cy="27.5" cx="145.04135570526122" j="3" val="75"
                                                        barHeight="137.5" barWidth="13.813462448120116"></path>
                                                    <path id="SvgjsPath1027"
                                                        d="M177.27276808420817 157L177.27276808420817 72.16666666666666C177.27276808420817 66.83333333333333 179.93943475087485 64.16666666666666 185.27276808420817 64.16666666666666L183.08623053232827 64.16666666666666C188.41956386566162 64.16666666666666 191.08623053232827 66.83333333333333 191.08623053232827 72.16666666666666L191.08623053232827 72.16666666666666L191.08623053232827 157C191.08623053232827 162.33333333333334 188.41956386566162 165 183.08623053232827 165C183.08623053232827 165 185.27276808420817 165 185.27276808420817 165C179.93943475087485 165 177.27276808420817 162.33333333333334 177.27276808420817 157C177.27276808420817 157 177.27276808420817 157 177.27276808420817 157 "
                                                        fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskkblnq8z9)"
                                                        pathTo="M 177.27276808420817 157L 177.27276808420817 72.16666666666666Q 177.27276808420817 64.16666666666666 185.27276808420817 64.16666666666666L 183.08623053232827 64.16666666666666Q 191.08623053232827 64.16666666666666 191.08623053232827 72.16666666666666L 191.08623053232827 72.16666666666666L 191.08623053232827 157Q 191.08623053232827 165 183.08623053232827 165L 185.27276808420817 165Q 177.27276808420817 165 177.27276808420817 157z"
                                                        pathFrom="M 177.27276808420817 157L 177.27276808420817 157L 191.08623053232827 157L 191.08623053232827 157L 191.08623053232827 157L 191.08623053232827 157L 191.08623053232827 157L 177.27276808420817 157"
                                                        cy="64.16666666666666" cx="191.08623053232827" j="4"
                                                        val="55" barHeight="100.83333333333334"
                                                        barWidth="13.813462448120116"></path>
                                                    <path id="SvgjsPath1029"
                                                        d="M223.31764291127524 157L223.31764291127524 108.83333333333333C223.31764291127524 103.5 225.98430957794193 100.83333333333331 231.31764291127524 100.83333333333333L229.13110535939535 100.83333333333333C234.4644386927287 100.83333333333331 237.13110535939535 103.5 237.13110535939535 108.83333333333333L237.13110535939535 108.83333333333333L237.13110535939535 157C237.13110535939535 162.33333333333334 234.4644386927287 165 229.13110535939535 165C229.13110535939535 165 231.31764291127524 165 231.31764291127524 165C225.98430957794193 165 223.31764291127524 162.33333333333334 223.31764291127524 157C223.31764291127524 157 223.31764291127524 157 223.31764291127524 157 "
                                                        fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskkblnq8z9)"
                                                        pathTo="M 223.31764291127524 157L 223.31764291127524 108.83333333333333Q 223.31764291127524 100.83333333333333 231.31764291127524 100.83333333333333L 229.13110535939535 100.83333333333333Q 237.13110535939535 100.83333333333333 237.13110535939535 108.83333333333333L 237.13110535939535 108.83333333333333L 237.13110535939535 157Q 237.13110535939535 165 229.13110535939535 165L 231.31764291127524 165Q 223.31764291127524 165 223.31764291127524 157z"
                                                        pathFrom="M 223.31764291127524 157L 223.31764291127524 157L 237.13110535939535 157L 237.13110535939535 157L 237.13110535939535 157L 237.13110535939535 157L 237.13110535939535 157L 223.31764291127524 157"
                                                        cy="100.83333333333333" cx="237.13110535939535" j="5"
                                                        val="35" barHeight="64.16666666666667"
                                                        barWidth="13.813462448120116"></path>
                                                    <path id="SvgjsPath1031"
                                                        d="M269.36251773834226 157L269.36251773834226 44.66666666666666C269.36251773834226 39.33333333333333 272.02918440500895 36.66666666666666 277.36251773834226 36.66666666666666L275.17598018646237 36.66666666666666C280.5093135197957 36.66666666666666 283.17598018646237 39.33333333333333 283.17598018646237 44.66666666666666L283.17598018646237 44.66666666666666L283.17598018646237 157C283.17598018646237 162.33333333333334 280.5093135197957 165 275.17598018646237 165C275.17598018646237 165 277.36251773834226 165 277.36251773834226 165C272.02918440500895 165 269.36251773834226 162.33333333333334 269.36251773834226 157C269.36251773834226 157 269.36251773834226 157 269.36251773834226 157 "
                                                        fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskkblnq8z9)"
                                                        pathTo="M 269.36251773834226 157L 269.36251773834226 44.66666666666666Q 269.36251773834226 36.66666666666666 277.36251773834226 36.66666666666666L 275.17598018646237 36.66666666666666Q 283.17598018646237 36.66666666666666 283.17598018646237 44.66666666666666L 283.17598018646237 44.66666666666666L 283.17598018646237 157Q 283.17598018646237 165 275.17598018646237 165L 277.36251773834226 165Q 269.36251773834226 165 269.36251773834226 157z"
                                                        pathFrom="M 269.36251773834226 157L 269.36251773834226 157L 283.17598018646237 157L 283.17598018646237 157L 283.17598018646237 157L 283.17598018646237 157L 283.17598018646237 157L 269.36251773834226 157"
                                                        cy="36.66666666666666" cx="283.17598018646237" j="6"
                                                        val="70" barHeight="128.33333333333334"
                                                        barWidth="13.813462448120116"></path>
                                                    <g id="SvgjsG1017" class="apexcharts-bar-goals-markers"
                                                        style="pointer-events: none">
                                                        <g id="SvgjsG1018" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1020" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1022" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1024" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1026" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1028" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1030" className="apexcharts-bar-goals-groups"></g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1016" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine1060" x1="-15.223901748657227" y1="0"
                                                x2="291.49315071105957" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine1061" x1="-15.223901748657227" y1="0"
                                                x2="291.49315071105957" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1062" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1063" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1064" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect1065" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect1066" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-selection-rect"></rect>
                                        </g>
                                        <g id="SvgjsG1041" class="apexcharts-yaxis" rel="0"
                                            transform="translate(20.282947540283203, 0)">
                                            <g id="SvgjsG1042" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1043"
                                                    font-family="Inter" x="20" y="31.3" text-anchor="end"
                                                    dominant-baseline="auto" font-size="0.75rem" font-weight="400"
                                                    fill="#b4b2b7" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Inter;">
                                                    <tspan id="SvgjsTspan1044">90K</tspan>
                                                    <title>90K</title>
                                                </text><text id="SvgjsText1045" font-family="Inter" x="20" y="86.3"
                                                    text-anchor="end" dominant-baseline="auto" font-size="0.75rem"
                                                    font-weight="400" fill="#b4b2b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Inter;">
                                                    <tspan id="SvgjsTspan1046">60K</tspan>
                                                    <title>60K</title>
                                                </text><text id="SvgjsText1047" font-family="Inter" x="20" y="141.3"
                                                    text-anchor="end" dominant-baseline="auto" font-size="0.75rem"
                                                    font-weight="400" fill="#b4b2b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Inter;">
                                                    <tspan id="SvgjsTspan1048">30K</tspan>
                                                    <title>30K</title>
                                                </text><text id="SvgjsText1049" font-family="Inter" x="20" y="196.3"
                                                    text-anchor="end" dominant-baseline="auto" font-size="0.75rem"
                                                    font-weight="400" fill="#b4b2b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Inter;">
                                                    <tspan id="SvgjsTspan1050">0K</tspan>
                                                    <title>0K</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1004" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 100px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                            <span class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(240, 242, 248);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                </div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                </div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-1 mt-md-3">
                                <div class="d-flex align-items-center gap-3">
                                    <h3 class="mb-0">45%</h3>
                                    <p class="mb-0">Your sales performance is 45% 😎 better compared to
                                        last month</p>
                                </div>
                                <div class="d-grid mt-3 mt-md-4">
                                    <button class="btn btn-primary waves-effect waves-light"
                                        type="button">Details</button>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 408px; height: 351px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Weekly Overview Chart -->

                <!-- Total Earnings -->
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2">Tổng doanh thu</h5>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="totalEarnings" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarnings">
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Last
                                        28 Days</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Last
                                        Month</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);">Last
                                        Year</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 mt-md-3 mb-md-5">
                                <div class="d-flex align-items-center">
                                    <h2 class="mb-0">$24,895</h2>
                                    <span class="text-success ms-2 fw-medium">
                                        <i class="mdi mdi-menu-up mdi-24px"></i>
                                        <small>10%</small>
                                    </span>
                                </div>
                                <small class="mt-1">Compared to $84,325 last year</small>
                            </div>
                            <ul class="p-0 m-0">
                                <li class="d-flex mb-4 pb-md-2">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="../themes/img/icons/misc/zipcar.png" alt="zipcar" class="rounded">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Zipcar</h6>
                                            <small>Vuejs, React &amp; HTML</small>
                                        </div>
                                        <div>
                                            <h6 class="mb-2">$24,895.65</h6>
                                            <div class="progress bg-label-primary" style="height: 4px;">
                                                <div class="progress-bar bg-primary" style="width: 75%"
                                                    role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-md-2">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="../themes/img/icons/misc/bitbank.png" alt="bitbank" class="rounded">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Bitbank</h6>
                                            <small>Sketch, Figma &amp; XD</small>
                                        </div>
                                        <div>
                                            <h6 class="mb-2">$8,6500.20</h6>
                                            <div class="progress bg-label-info" style="height: 4px;">
                                                <div class="progress-bar bg-info" style="width: 75%" role="progressbar"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-md-3">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="../themes/img/icons/misc/aviato.png" alt="aviato" class="rounded">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Aviato</h6>
                                            <small>HTML &amp; Angular</small>
                                        </div>
                                        <div>
                                            <h6 class="mb-2">$1,2450.80</h6>
                                            <div class="progress bg-label-secondary" style="height: 4px;">
                                                <div class="progress-bar bg-secondary" style="width: 75%"
                                                    role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/ Total Earnings -->

                <!-- Four Cards -->
                <div class="col-xl-4 col-md-6">
                    <div class="row gy-4">
                        <!-- Total Profit line chart -->
                        <div class="col-sm-6">
                            <div class="card h-100">
                                <div class="card-header pb-0">
                                    <h4 class="mb-0">$86.4k</h4>
                                </div>
                                <div class="card-body" style="position: relative;">
                                    <div id="totalProfitLineChart" class="mb-3" style="min-height: 100px;">
                                        <div id="apexchartsrmlz00hl"
                                            class="apexcharts-canvas apexchartsrmlz00hl apexcharts-theme-light"
                                            style="width: 151px; height: 100px;"><svg id="SvgjsSvg1067" width="151"
                                                height="100" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)" style="background: transparent;">
                                                <g id="SvgjsG1069" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(3, 15)">
                                                    <defs id="SvgjsDefs1068">
                                                        <clipPath id="gridRectMaskrmlz00hl">
                                                            <rect id="SvgjsRect1074" width="146" height="88"
                                                                x="-3.5" y="-1.5" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskrmlz00hl"></clipPath>
                                                        <clipPath id="nonForecastMaskrmlz00hl"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskrmlz00hl">
                                                            <rect id="SvgjsRect1075" width="167" height="113"
                                                                x="-14" y="-14" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <line id="SvgjsLine1073" x1="0" y1="0"
                                                        x2="0" y2="85" stroke="#b6b6b6"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                        height="85" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                        stroke-width="1"></line>
                                                    <g id="SvgjsG1092" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1093" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1102" class="apexcharts-grid">
                                                        <g id="SvgjsG1103" class="apexcharts-gridlines-horizontal"></g>
                                                        <g id="SvgjsG1104" class="apexcharts-gridlines-vertical">
                                                            <line id="SvgjsLine1105" x1="0" y1="0"
                                                                x2="0" y2="85" stroke="#b4b2b7"
                                                                stroke-dasharray="6" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1106" x1="27.8" y1="0"
                                                                x2="27.8" y2="85" stroke="#b4b2b7"
                                                                stroke-dasharray="6" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1107" x1="55.6" y1="0"
                                                                x2="55.6" y2="85" stroke="#b4b2b7"
                                                                stroke-dasharray="6" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1108" x1="83.4" y1="0"
                                                                x2="83.4" y2="85" stroke="#b4b2b7"
                                                                stroke-dasharray="6" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1109" x1="111.2" y1="0"
                                                                x2="111.2" y2="85" stroke="#b4b2b7"
                                                                stroke-dasharray="6" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1110" x1="139" y1="0"
                                                                x2="139" y2="85" stroke="#b4b2b7"
                                                                stroke-dasharray="6" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <line id="SvgjsLine1112" x1="0" y1="85"
                                                            x2="139" y2="85" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt">
                                                        </line>
                                                        <line id="SvgjsLine1111" x1="0" y1="1"
                                                            x2="0" y2="85" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt">
                                                        </line>
                                                    </g>
                                                    <g id="SvgjsG1076"
                                                        class="apexcharts-line-series apexcharts-plot-series">
                                                        <g id="SvgjsG1077" class="apexcharts-series"
                                                            seriesName="seriesx1" data:longestSeries="true"
                                                            rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1091"
                                                                d="M0 85L27.8 51L55.6 76.5L83.4 34L111.2 59.5L139 8.5C139 8.5 139 8.5 139 8.5 "
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(144,85,253,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="3"
                                                                stroke-dasharray="0" class="apexcharts-line"
                                                                index="0" clip-path="url(#gridRectMaskrmlz00hl)"
                                                                pathTo="M 0 85L 27.8 51L 55.6 76.5L 83.4 34L 111.2 59.5L 139 8.5"
                                                                pathFrom="M -1 85L -1 85L 27.8 85L 55.6 85L 83.4 85L 111.2 85L 139 85">
                                                            </path>
                                                            <g id="SvgjsG1078" class="apexcharts-series-markers-wrap"
                                                                data:realIndex="0">
                                                                <g id="SvgjsG1080" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrmlz00hl)">
                                                                    <circle id="SvgjsCircle1081" r="6" cx="0"
                                                                        cy="85"
                                                                        class="apexcharts-marker no-pointer-events wac17ij45"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="3"
                                                                        stroke-opacity="0.9" rel="0" j="0"
                                                                        index="0" default-marker-size="6"></circle>
                                                                    <circle id="SvgjsCircle1082" r="6" cx="27.8"
                                                                        cy="51"
                                                                        class="apexcharts-marker no-pointer-events wcsc9j8w9"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="3"
                                                                        stroke-opacity="0.9" rel="1" j="1"
                                                                        index="0" default-marker-size="6"></circle>
                                                                </g>
                                                                <g id="SvgjsG1083" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrmlz00hl)">
                                                                    <circle id="SvgjsCircle1084" r="6" cx="55.6"
                                                                        cy="76.5"
                                                                        class="apexcharts-marker no-pointer-events welmerewa"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="3"
                                                                        stroke-opacity="0.9" rel="2" j="2"
                                                                        index="0" default-marker-size="6"></circle>
                                                                </g>
                                                                <g id="SvgjsG1085" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrmlz00hl)">
                                                                    <circle id="SvgjsCircle1086" r="6" cx="83.4"
                                                                        cy="34"
                                                                        class="apexcharts-marker no-pointer-events wui2xxmhg"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="3"
                                                                        stroke-opacity="0.9" rel="3" j="3"
                                                                        index="0" default-marker-size="6"></circle>
                                                                </g>
                                                                <g id="SvgjsG1087" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrmlz00hl)">
                                                                    <circle id="SvgjsCircle1088" r="6" cx="111.2"
                                                                        cy="59.5"
                                                                        class="apexcharts-marker no-pointer-events w3hbl20zg"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="3"
                                                                        stroke-opacity="0.9" rel="4" j="4"
                                                                        index="0" default-marker-size="6"></circle>
                                                                </g>
                                                                <g id="SvgjsG1089" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskrmlz00hl)">
                                                                    <circle id="SvgjsCircle1090" r="6" cx="139"
                                                                        cy="8.5"
                                                                        class="apexcharts-marker no-pointer-events wsgebt9ev"
                                                                        stroke="#9055fd" fill="#ffffff" fill-opacity="1"
                                                                        stroke-width="3" stroke-opacity="0.9"
                                                                        rel="5" j="5" index="0"
                                                                        default-marker-size="6"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1079" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1113" x1="0" y1="0"
                                                        x2="139" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1114" x1="0" y1="0"
                                                        x2="139" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1115" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1116" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1117" class="apexcharts-point-annotations"></g>
                                                    <rect id="SvgjsRect1118" width="0" height="0" x="0" y="0"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-zoom-rect">
                                                    </rect>
                                                    <rect id="SvgjsRect1119" width="0" height="0" x="0" y="0"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-selection-rect"></rect>
                                                </g>
                                                <rect id="SvgjsRect1072" width="0" height="0" x="0" y="0"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="SvgjsG1100" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-8, 0)">
                                                    <g id="SvgjsG1101" class="apexcharts-yaxis-texts-g">
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1070" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 50px;">
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="text-center mb-0">Total Profit</h6>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 192px; height: 162px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Total Profit line chart -->
                        <!-- Total Profit Weekly Project -->
                        <div class="col-sm-6">
                            <div class="card h-100">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-secondary rounded-circle shadow">
                                            <i class="mdi mdi-poll mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="totalProfitID"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalProfitID">
                                            <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                                            <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                                            <a class="dropdown-item waves-effect" href="javascript:void(0);">Update</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body mt-mg-1">
                                    <h6 class="mb-2">Total Profit</h6>
                                    <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                                        <h4 class="mb-0 me-2">$25.6k</h4>
                                        <small class="text-success mt-1">+42%</small>
                                    </div>
                                    <small>Weekly Project</small>
                                </div>
                            </div>
                        </div>
                        <!--/ Total Profit Weekly Project -->
                        <!-- New Yearly Project -->
                        <div class="col-sm-6">
                            <div class="card h-100">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-primary rounded-circle shadow-sm">
                                            <i class="mdi mdi-wallet-travel mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="newProjectID"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="newProjectID">
                                            <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                                            <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                                            <a class="dropdown-item waves-effect" href="javascript:void(0);">Update</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body mt-mg-1">
                                    <h6 class="mb-2">New Project</h6>
                                    <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                                        <h4 class="mb-0 me-2">862</h4>
                                        <small class="text-danger mt-1">-18%</small>
                                    </div>
                                    <small>Yearly Project</small>
                                </div>
                            </div>
                        </div>
                        <!--/ New Yearly Project -->
                        <!-- Sessions chart -->
                        <div class="col-sm-6">
                            <div class="card h-100">
                                <div class="card-header pb-0">
                                    <h4 class="mb-0">2,856</h4>
                                </div>
                                <div class="card-body" style="position: relative;">
                                    <div id="sessionsColumnChart" class="mb-3" style="min-height: 100px;">
                                        <div id="apexchartsepz552io"
                                            class="apexcharts-canvas apexchartsepz552io apexcharts-theme-light"
                                            style="width: 151px; height: 100px;"><svg id="SvgjsSvg1120" width="151"
                                                height="100" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)" style="background: transparent;">
                                                <g id="SvgjsG1122" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(13.7, 20)">
                                                    <defs id="SvgjsDefs1121">
                                                        <linearGradient id="SvgjsLinearGradient1125" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1126" stop-opacity="0.4"
                                                                stop-color="rgba(216,227,240,0.4)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1127" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop1128" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <clipPath id="gridRectMaskepz552io">
                                                            <rect id="SvgjsRect1130" width="144.99999999999997"
                                                                height="80" x="-11.7" y="0" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff">
                                                            </rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskepz552io"></clipPath>
                                                        <clipPath id="nonForecastMaskepz552io"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskepz552io">
                                                            <rect id="SvgjsRect1131" width="125.6" height="84"
                                                                x="-2" y="-2" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <rect id="SvgjsRect1129" width="0" height="80" x="0" y="0"
                                                        rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke-dasharray="3"
                                                        fill="url(#SvgjsLinearGradient1125)"
                                                        class="apexcharts-xcrosshairs" y2="80" filter="none"
                                                        fill-opacity="0.9"></rect>
                                                    <g id="SvgjsG1151" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1152" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1161" class="apexcharts-grid">
                                                        <g id="SvgjsG1162" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1164" x1="-9.7" y1="0"
                                                                x2="131.29999999999998" y2="0"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1165" x1="-9.7" y1="20"
                                                                x2="131.29999999999998" y2="20"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1166" x1="-9.7" y1="40"
                                                                x2="131.29999999999998" y2="40"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1167" x1="-9.7" y1="60"
                                                                x2="131.29999999999998" y2="60"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1168" x1="-9.7" y1="80"
                                                                x2="131.29999999999998" y2="80"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                        </g>
                                                        <g id="SvgjsG1163" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1170" x1="0" y1="80"
                                                            x2="121.6" y2="80" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt">
                                                        </line>
                                                        <line id="SvgjsLine1169" x1="0" y1="1"
                                                            x2="0" y2="80" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt">
                                                        </line>
                                                    </g>
                                                    <g id="SvgjsG1132"
                                                        class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g id="SvgjsG1133" class="apexcharts-series" rel="1"
                                                            seriesName="seriesx1" data:realIndex="0">
                                                            <rect id="SvgjsRect1136" width="6.08" height="80"
                                                                x="-3.04" y="0" rx="4" ry="4"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#F0F2F8"
                                                                class="apexcharts-backgroundBar"></rect>
                                                            <path id="SvgjsPath1138"
                                                                d="M-3.04 76L-3.04 54C-3.04 51.333333333333336 -1.706666666666667 50 0.96 50L-0.96 50C1.7066666666666668 50 3.04 51.333333333333336 3.04 54L3.04 54L3.04 76C3.04 78.66666666666667 1.706666666666667 80 -0.96 80C-0.96 80 0.96 80 0.96 80C-1.7066666666666668 80 -3.04 78.66666666666667 -3.04 76C-3.04 76 -3.04 76 -3.04 76 "
                                                                fill="rgba(255,76,81,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskepz552io)"
                                                                pathTo="M -3.04 76L -3.04 54Q -3.04 50 0.96 50L -0.96 50Q 3.04 50 3.04 54L 3.04 54L 3.04 76Q 3.04 80 -0.96 80L 0.96 80Q -3.04 80 -3.04 76z"
                                                                pathFrom="M -3.04 76L -3.04 76L 3.04 76L 3.04 76L 3.04 76L 3.04 76L 3.04 76L -3.04 76"
                                                                cy="50" cx="3.04" j="0" val="30"
                                                                barHeight="30" barWidth="6.08"></path>
                                                            <rect id="SvgjsRect1139" width="6.08" height="80"
                                                                x="27.360000000000003" y="0" rx="4"
                                                                ry="4" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#F0F2F8"
                                                                class="apexcharts-backgroundBar"></rect>
                                                            <path id="SvgjsPath1141"
                                                                d="M27.360000000000003 76L27.360000000000003 14C27.360000000000003 11.333333333333329 28.693333333333335 10 31.360000000000003 10L29.440000000000005 10C32.10666666666667 10 33.440000000000005 11.333333333333329 33.440000000000005 14L33.440000000000005 14L33.440000000000005 76C33.440000000000005 78.66666666666667 32.10666666666667 80 29.440000000000005 80C29.440000000000005 80 31.360000000000003 80 31.360000000000003 80C28.693333333333335 80 27.360000000000003 78.66666666666667 27.360000000000003 76C27.360000000000003 76 27.360000000000003 76 27.360000000000003 76 "
                                                                fill="rgba(144,85,253,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskepz552io)"
                                                                pathTo="M 27.360000000000003 76L 27.360000000000003 14Q 27.360000000000003 10 31.360000000000003 10L 29.440000000000005 10Q 33.440000000000005 10 33.440000000000005 14L 33.440000000000005 14L 33.440000000000005 76Q 33.440000000000005 80 29.440000000000005 80L 31.360000000000003 80Q 27.360000000000003 80 27.360000000000003 76z"
                                                                pathFrom="M 27.360000000000003 76L 27.360000000000003 76L 33.440000000000005 76L 33.440000000000005 76L 33.440000000000005 76L 33.440000000000005 76L 33.440000000000005 76L 27.360000000000003 76"
                                                                cy="10" cx="33.440000000000005" j="1"
                                                                val="70" barHeight="70" barWidth="6.08"></path>
                                                            <rect id="SvgjsRect1142" width="6.08" height="80"
                                                                x="57.760000000000005" y="0" rx="4"
                                                                ry="4" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#F0F2F8"
                                                                class="apexcharts-backgroundBar"></rect>
                                                            <path id="SvgjsPath1144"
                                                                d="M57.760000000000005 76L57.760000000000005 34C57.760000000000005 31.333333333333336 59.093333333333334 30 61.760000000000005 30L59.84 30C62.506666666666675 30 63.84 31.333333333333336 63.84 34L63.84 34L63.84 76C63.84 78.66666666666667 62.506666666666675 80 59.84 80C59.84 80 61.760000000000005 80 61.760000000000005 80C59.093333333333334 80 57.760000000000005 78.66666666666667 57.760000000000005 76C57.760000000000005 76 57.760000000000005 76 57.760000000000005 76 "
                                                                fill="rgba(255,76,81,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskepz552io)"
                                                                pathTo="M 57.760000000000005 76L 57.760000000000005 34Q 57.760000000000005 30 61.760000000000005 30L 59.84 30Q 63.84 30 63.84 34L 63.84 34L 63.84 76Q 63.84 80 59.84 80L 61.760000000000005 80Q 57.760000000000005 80 57.760000000000005 76z"
                                                                pathFrom="M 57.760000000000005 76L 57.760000000000005 76L 63.84 76L 63.84 76L 63.84 76L 63.84 76L 63.84 76L 57.760000000000005 76"
                                                                cy="30" cx="63.84" j="2" val="50"
                                                                barHeight="50" barWidth="6.08"></path>
                                                            <rect id="SvgjsRect1145" width="6.08" height="80"
                                                                x="88.16" y="0" rx="4" ry="4"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#F0F2F8"
                                                                class="apexcharts-backgroundBar"></rect>
                                                            <path id="SvgjsPath1147"
                                                                d="M88.16 76L88.16 44C88.16 41.333333333333336 89.49333333333334 40 92.16 40L90.24 40C92.90666666666667 40 94.24 41.333333333333336 94.24 44L94.24 44L94.24 76C94.24 78.66666666666667 92.90666666666667 80 90.24 80C90.24 80 92.16 80 92.16 80C89.49333333333334 80 88.16 78.66666666666667 88.16 76C88.16 76 88.16 76 88.16 76 "
                                                                fill="rgba(144,85,253,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskepz552io)"
                                                                pathTo="M 88.16 76L 88.16 44Q 88.16 40 92.16 40L 90.24 40Q 94.24 40 94.24 44L 94.24 44L 94.24 76Q 94.24 80 90.24 80L 92.16 80Q 88.16 80 88.16 76z"
                                                                pathFrom="M 88.16 76L 88.16 76L 94.24 76L 94.24 76L 94.24 76L 94.24 76L 94.24 76L 88.16 76"
                                                                cy="40" cx="94.24" j="3" val="40"
                                                                barHeight="40" barWidth="6.08"></path>
                                                            <rect id="SvgjsRect1148" width="6.08" height="80"
                                                                x="118.56" y="0" rx="4" ry="4"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#F0F2F8"
                                                                class="apexcharts-backgroundBar"></rect>
                                                            <path id="SvgjsPath1150"
                                                                d="M118.56 76L118.56 24C118.56 21.333333333333336 119.89333333333335 20 122.56 20L120.64 20C123.30666666666667 20 124.64 21.333333333333336 124.64 24L124.64 24L124.64 76C124.64 78.66666666666667 123.30666666666667 80 120.64 80C120.64 80 122.56 80 122.56 80C119.89333333333335 80 118.56 78.66666666666667 118.56 76C118.56 76 118.56 76 118.56 76 "
                                                                fill="rgba(144,85,253,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMaskepz552io)"
                                                                pathTo="M 118.56 76L 118.56 24Q 118.56 20 122.56 20L 120.64 20Q 124.64 20 124.64 24L 124.64 24L 124.64 76Q 124.64 80 120.64 80L 122.56 80Q 118.56 80 118.56 76z"
                                                                pathFrom="M 118.56 76L 118.56 76L 124.64 76L 124.64 76L 124.64 76L 124.64 76L 124.64 76L 118.56 76"
                                                                cy="20" cx="124.64" j="4" val="60"
                                                                barHeight="60" barWidth="6.08"></path>
                                                            <g id="SvgjsG1135" class="apexcharts-bar-goals-markers"
                                                                style="pointer-events: none">
                                                                <g id="SvgjsG1137"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1140"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1143"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1146"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1149"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1134" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1171" x1="-9.7" y1="0"
                                                        x2="131.29999999999998" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1172" x1="-9.7" y1="0"
                                                        x2="131.29999999999998" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1173" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1174" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1175" class="apexcharts-point-annotations"></g>
                                                    <rect id="SvgjsRect1176" width="0" height="0" x="0" y="0"
                                                        rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fefefe" class="apexcharts-zoom-rect">
                                                    </rect>
                                                    <rect id="SvgjsRect1177" width="0" height="0" x="0" y="0"
                                                        rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                                </g>
                                                <g id="SvgjsG1159" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-8, 0)">
                                                    <g id="SvgjsG1160" class="apexcharts-yaxis-texts-g">
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1123" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 50px;">
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="text-center mb-0">Sessions</h6>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 192px; height: 162px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Sessions chart -->
                    </div>
                </div>
        
            </div>

        </div>
        <!-- / Content -->

        <!-- Footer -->
        <!-- Footer-->

    @endsection
