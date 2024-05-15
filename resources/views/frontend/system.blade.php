@extends('layouts.app')
@section('title', 'Hệ thống của hàng')

@section('content')
    <div class="bodywrap">
        <section class="bread-crumb"
            style="background: linear-gradient(0deg, rgba(0,0,0,0.8), rgba(0,0,0,0.3)),  url(//bizweb.dktcdn.net/100/487/743/themes/912230/assets/breadcrumb.jpg?1710378319730) no-repeat center;">

            <div class="container">
                <div class="title-bread-crumb">

                    Hệ thống cửa hàng

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

                    <li><strong><span>Hệ thống cửa hàng</span></strong></li>

                </ul>
            </div>
        </section>
        <section class="page page-he-thong">
            <div class="container">

                <div class="hethong-info">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="item">
                                <div class="thump">
                                    <img src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/icon_hethong1.png?1710378319730"
                                        alt="Hệ thống 8 cửa hàng
<br>Trên toàn quốc"
                                        title="Hệ thống 8 cửa hàng
<br>Trên toàn quốc">
                                </div>
                                <span>Hệ thống 8 cửa hàng
                                    <br>Trên toàn quốc</span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item">
                                <div class="thump">
                                    <img src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/icon_hethong2.png?1710378319730"
                                        alt="Hơn 100 nhân viên<br>
Để phục vụ quý khách"
                                        title="Hơn 100 nhân viên<br>
Để phục vụ quý khách">
                                </div>
                                <span>Hơn 100 nhân viên<br>
                                    Để phục vụ quý khách</span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item">
                                <div class="thump">
                                    <img src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/icon_hethong3.png?1710378319730"
                                        alt="Mở cửa 8-22h<br>
cả CN &amp; Lễ tết"
                                        title="Mở cửa 8-22h<br>
cả CN &amp; Lễ tết">
                                </div>
                                <span>Mở cửa 8-22h<br>
                                    cả CN &amp; Lễ tết</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 d-none">
                        <div class="page-title category-title">
                            <h1 class="title-head d-none"><a href="#"></a></h1>
                        </div>
                        <div class="content-page rte">

                        </div>
                    </div>

                    <div class="col-md-5 col-lg-4 col-md-12 col-12 col-left">
                        <div class="option-chos">
                            <div class="group-option">


                                <div class="group-city group">
                                    <select id="city" class="select">
                                        <option value="ALL" selected="">Chọn tỉnh thành</option>


                                        Hà Nội
                                        <option value="Hà Nội">Hà Nội</option>

                                        Hồ Chí Minh
                                        <option value="Hồ Chí Minh">Hồ Chí Minh</option>

                                        Đà Nẵng
                                        <option value="Đà Nẵng">Đà Nẵng</option>

                                        Bình Dương
                                        <option value="Bình Dương">Bình Dương</option>

                                        Cần Thơ
                                        <option value="Cần Thơ">Cần Thơ</option>





                                    </select>
                                </div>
                                <div class="group-district group">
                                    <select id="district" class="select" disabled="">
                                        <option value="ALL">Chọn quận/huyện</option>
                                    </select>
                                </div>
                            </div>
                            <div class="info-store info-block">
                                <div data-local="Hồ Chí Minh" data-district="Quận 11" class="store-list"><span
                                        class="name-cuahang">Dola Sài Gòn</span><span class="store-name"
                                        data-url="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.518261716127!2d106.65095971411642!3d10.771561562230547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f4964c382dd%3A0xb61978d7651a271f!2zUGjhuqduIG3hu4FtIHF14bqjbiBsw70gYsOhbiBow6BuZyBTYXBvIC0gSOG7kyBDaMOtIE1pbmg!5e0!3m2!1svi!2s!4v1649778540165!5m2!1svi!2s"><b>Địa
                                            chỉ:</b> Tầng 3, 70 Lữ Gia, Phường 15, Quận 11, Thành phố Hồ Chí
                                        Minh</span><span class="store-phone"><b>Hotline:</b> <a class="phone-url"
                                            href="tel:1900 6750">1900 6750</a></span></div>
                                <div data-local="Bình Dương" data-district="TP.Thủ Dầu Một" class="store-list"><span
                                        class="name-cuahang">Dola Bình Dương</span><span class="store-name"
                                        data-url="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.9413500336022!2d106.66983361411785!3d10.967799658632787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d1f5ea2844d1%3A0x68ff2239eeb3a9a9!2zMTY5IE5ndXnhu4VuIEjhu691IEPhuqNuaCwgUGjDuiBUaOG7jSwgVGjhu6cgROG6p3UgTeG7mXQsIELDrG5oIETGsMahbmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1649778686066!5m2!1svi!2s"><b>Địa
                                            chỉ:</b> 169 / 34 Nguyễn Hữu Cảnh, Phường Phú Thọ, TP.Thủ Dầu Một, Tỉnh Bình
                                        Dương</span><span class="store-phone"><b>Hotline:</b> <a class="phone-url"
                                            href="tel:1900 6750">1900 6750</a></span></div>
                                <div data-local="Cần Thơ" data-district="Quận Ninh Kiều" class="store-list"><span
                                        class="name-cuahang">Dola Cần Thơ</span><span class="store-name"
                                        data-url="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.7286179369694!2d105.7567164141113!3d10.039238575113611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895e8b677aa1%3A0xd73b3c9a031d237f!2zS0RDIFRo4bubaSBOaOG7sXQ!5e0!3m2!1svi!2s!4v1649778804218!5m2!1svi!2s"><b>Địa
                                            chỉ:</b> 81 đường Phan Huy Chú, KDC Thới Nhựt I, Phường An Khánh, Quận Ninh
                                        Kiều, Tp Cần Thơ</span><span class="store-phone"><b>Hotline:</b> <a
                                            class="phone-url" href="tel:1900 6750">1900 6750</a></span></div>
                                <div data-local="Hà Nội" data-district="Quận Ba Đình" class="store-list"><span
                                        class="name-cuahang">Dola Hà Nội</span><span class="store-name"
                                        data-url="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0889927657763!2d105.8402373144074!3d21.029124893142946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab5be62341c1%3A0x6eaeebe47b93fe04!2zVMOyYSBuaMOgIHPhu5EgNSDEkGnhu4duIEJpw6puIFBo4bun!5e0!3m2!1svi!2s!4v1648984122910!5m2!1svi!2s"><b>Địa
                                            chỉ:</b> Tầng 6 - 266 Đội Cấn, Phường Liễu Giai, Quận Ba Đình, Hà
                                        Nội</span><span class="store-phone"><b>Hotline:</b> <a class="phone-url"
                                            href="tel:1900 6750">1900 6750</a></span></div>
                                <div data-local="Đà Nẵng" data-district="Quận Hải Châu" class="store-list"><span
                                        class="name-cuahang">Dola Đà Nẵng</span><span class="store-name"
                                        data-url="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.610608676567!2d108.21247971416946!3d16.03377334464764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219ecd6d00127%3A0x5e1f8719efd14c01!2zMTgxIEh14buzbmggVOG6pW4gUGjDoXQsIEhvw6AgQ8aw4budbmcgTmFtLCBI4bqjaSBDaMOidSwgxJDDoCBO4bq1bmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1649778942084!5m2!1svi!2s"><b>Địa
                                            chỉ:</b> 181 đường Huỳnh Tấn Phát, Phường Hoà Cường Nam, Quận Hải Châu, TP Đà
                                        Nẵng</span><span class="store-phone"><b>Hotline:</b> <a class="phone-url"
                                            href="tel:1900 6750">1900 6750</a></span></div>
                                <div data-local="Hà Nội" data-district="Quận Cầu Giấy" class="store-list"><span
                                        class="name-cuahang">Dola Hoàng Quốc Việt</span><span class="store-name"
                                        data-url="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.665705597794!2d105.78940821424565!3d21.046057892565063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3048cf1bc9%3A0xf383d5c388f26254!2zMzggSG_DoG5nIFF14buRYyBWaeG7h3QsIE5naMSpYSBUw6JuLCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1650036591243!5m2!1svi!2s"><b>Địa
                                            chỉ:</b> 38 Hoàng Quốc Việt, Phường Nghĩa Tân, Quận Cầu Giấy, Hà Nội</span><span
                                        class="store-phone"><b>Hotline:</b> <a class="phone-url"
                                            href="tel:1900 6750">1900 6750</a></span></div>
                                <div data-local="Hà Nội" data-district="Quận Cầu Giấy" class="store-list"><span
                                        class="name-cuahang">Dola Hoàng Đạo Thúy</span><span class="store-name"
                                        data-url="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6317401375168!2d105.80027631424484!3d21.007393993884758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca10d52e8d7%3A0x27fe5187e5401dac!2zMTUwIEhvw6BuZyDEkOG6oW8gVGjDunksIFRydW5nIEhvw6AsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1650036686730!5m2!1svi!2s"><b>Địa
                                            chỉ:</b> 150 Hoàng Đạo Thúy, Phường Trung Hòa, Quận Cầu Giấy, Hà Nội</span><span
                                        class="store-phone"><b>Hotline:</b> <a class="phone-url"
                                            href="tel:1900 6750">1900 6750</a></span></div>
                                <div data-local="Hà Nội" data-district="Quận Hà Đông" class="store-list"><span
                                        class="name-cuahang">Dola Trần Phú</span><span class="store-name"
                                        data-url="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6566429892996!2d106.67554851411637!3d10.760923462423836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1d9884721d%3A0x8dc3d6a4115c6305!2zOTUgVHLhuqduIFBow7osIFBoxrDhu51uZyA0LCBRdeG6rW4gNSwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1650036943196!5m2!1svi!2s"><b>Địa
                                            chỉ:</b> 95 Trần Phú, Phường Văn Quán, Quận Hà Đông, Hà Nội</span><span
                                        class="store-phone"><b>Hotline:</b> <a class="phone-url"
                                            href="tel:1900 6750">1900 6750</a></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8 col-md-12 col-12 col-right">
                        <div class="wrapcontact">
                            <div class="iFrameMap">
                                <div id="map_contact" class="map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3919.5692504136196!2d106.696811!3d10.767643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1573f5d56f%3A0x300ecbf0d5ab5050!2zMTAgVHLhu4tuaCBWxINuIEPhuqVuLCBQaMaw4budbmcgQ-G6p3Ugw5RuZyBMw6NuaCwgUXXhuq1uIDEsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2sus!4v1647421770627!5m2!1svi!2sus"
                                        width="600" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="pagebody d-none">
                            <iframe src="" width="100%" height="500"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="//bizweb.dktcdn.net/100/487/743/themes/912230/assets/tabletop.js?1710378319730" type="text/javascript">
        </script>
        <script>
            $(document).ready(function() {
                var public_spreadsheet_url =
                    "https://docs.google.com/spreadsheets/d/e/2PACX-1vRPNCj5me4-UQdDlH9jYnvjMRzy_e_ivxr72s1WE_ATxkSHAc8r7_MA_BmocldULJasQjxRe1-oFRBG/pub?output=csv";
                var data;
                Papa.parse(public_spreadsheet_url, {
                    header: true,
                    download: true,
                    dynamicTyping: true,
                    complete: function(results) {
                        var result = results.data;
                        var dataFix = result;
                        showlocation();
                        $('.store-list span').click(function() {
                            var urls = $(this).attr('data-url');
                            $('.wrapcontact').addClass('d-none');
                            $('.pagebody').removeClass('d-none');
                            $('.pagebody iframe').attr('src', urls);
                        });



                        /*Theo thành phố*/
                        var citytarget = '';

                        $('.group-city select').on('change', function(e) {


                            var optionSelected = $("option:selected", this);
                            var valueSelected = this.value;
                            citytarget = this.value;
                            if (valueSelected != 'ALL') {
                                $('.store-list').addClass('d-none');
                                $('.store-list').each(function() {
                                    if (valueSelected === $(this).attr('data-local')) {
                                        $(this).removeClass('d-none');
                                    }
                                });
                                $('#district').removeAttr('disabled');
                                showDistrict();
                                removeDuplicate3();
                            } else {
                                $('#district').attr('disabled', 'disabled');
                                $('.store-list').removeClass('d-none');
                                $('.group-district select').html(
                                    '<option value="ALL">Chọn quận/huyện</option>');

                            }

                        });


                        /*Theo quận huyện*/
                        $('.group-district select').on('change', function(e) {
                            var oSelected = $("option:selected", this);
                            var oSelectedCity = $("option:selected", '.group-city select');
                            var oSelectedProduct = $("option:selected", '.group-product select');
                            var oSelectedStore = $("option:selected", '.group-store select');
                            $(this).attr("selected", "selected");
                            var valSelected = oSelected.data('district');
                            var valueSelected = oSelected.val();
                            var valCity = oSelected.data('local');
                            var valProduct = oSelected.data('product');
                            var valStore = oSelected.data('store');
                            var valSelectedProduct = oSelectedCity.data('product');
                            var valSelectedCity = oSelectedCity.val();
                            var valSelectedStore = oSelectedStore.val();

                            if (valueSelected != 'ALL') {
                                $('.store-list').addClass('d-none');

                                $('.store-list').each(function() {
                                    console.log('test' + valCity)
                                    if (valSelected === $(this).attr('data-district') &&
                                        valCity === $(this).attr('data-local')) {
                                        $(this).removeClass('d-none');
                                    }
                                });
                                $('#district').removeAttr('disabled');
                            } else {
                                console.log('check' + valSelectedCity);
                                $('.store-list').each(function() {
                                    if (valSelectedCity === $(this).attr('data-local')) {
                                        $(this).removeClass('d-none');
                                    }
                                });
                            }
                        });

                        function showlocation(local) {
                            var cityString = "";
                            dataFix.forEach(function(data) {
                                let datasdt = data.sdt.toString();
                                let result = datasdt.replace('#', '');
                                cityString += '<div data-local="' + data.city +
                                    '" data-district="' + data.district + '" class="store-list">' +
                                    '<span class="name-cuahang">' + data.name + '</span>' +
                                    '<span class="store-name" data-url="' + data.url +
                                    '"><b>Địa chỉ:</b> ' + data.address + '</span>' +
                                    '<span class="store-phone"><b>Hotline:</b> <a class="phone-url" href="tel:' +
                                    result + '">' + result + '</a></span>'

                                    +
                                    '</div>	';
                            })
                            $('.info-store').html(cityString);
                        }


                        function showDistrict(local) {
                            var district = "";
                            var citys = citytarget;
                            dataFix.forEach(function(data) {

                                if (data.city === citys) {

                                    district += '<option data-local="' + data.city +
                                        '"data-district="' + data.district + '" value="' + data
                                        .city + '" class="district-list">' +
                                        '<span class="district-name">' + data.district + '</span>' +
                                        '</option>';
                                }
                            })
                            $('#district').html('<option value="ALL">Chọn quận/huyện</option>' + district);
                        }

                        function removeDuplicate() {
                            var map = {};
                            $('#product option').each(function() {
                                if (map[$(this).attr('data-product')]) {
                                    $(this).remove()
                                }
                                map[$(this).attr('data-product')] = true;
                            })
                        }

                        function removeDuplicate2() {
                            var map = {};
                            $('#city option').each(function() {
                                if (map[$(this).attr('data-local')]) {
                                    $(this).remove()
                                }
                                map[$(this).attr('data-local')] = true;
                            })
                        }

                        function removeDuplicate3() {
                            var map = {};
                            $('#district option').each(function() {
                                if (map[$(this).attr('data-district')]) {
                                    $(this).remove()
                                }
                                map[$(this).attr('data-district')] = true;
                            })
                        }

                        function awe_convertVietnamese(str) {
                            str = str.toUpperCase();
                            str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
                            str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
                            str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
                            str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
                            str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
                            str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
                            str = str.replace(/đ/g, "d");
                            str = str.replace(
                                /!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,
                                "-");
                            str = str.replace(/-+-/g, "-");
                            str = str.replace(/^\-+|\-+$/g, "");
                            return str;
                        }
                    }
                });
            });
        </script>
    </div>
@endsection
