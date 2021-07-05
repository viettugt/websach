<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from dreambook.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jun 2021 03:28:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <base href="{{asset('')}}">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="fontend/public/templates/book/images/logo-title.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="fontend/public/templates/book/apple-touch-icon.html">
    <link rel="stylesheet" href="fontend/public/templates/book/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontend/public/templates/book/css/normalize.css">
    <link rel="stylesheet" href="fontend/public/templates/book/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fontend/public/templates/book/css/icomoon.css">
    <link rel="stylesheet" href="fontend/public/templates/book/css/jquery-ui.css">
    <link rel="stylesheet" href="fontend/public/templates/book/css/owl.carousel.css">
    <link rel="stylesheet" href="fontend/public/templates/book/css/transitions.css">
    <link rel="stylesheet" href="fontend/public/templates/book/css/main.css">
    <link rel="stylesheet" href="fontend/public/templates/book/css/color-purple.css">
    <link rel="stylesheet" href="fontend/public/templates/book/css/responsive.css">
    <link rel="stylesheet" href="fontend/public/templates/book/sweetalert.css">
    <link rel="stylesheet" href="fontend/public/templates/book/css/style.css">
    <style>
    h3 a {
        text-transform: uppercase !important;
        font-family: 'Open Sans', Arial, Helvetica, sans-serif !important;
        font-size: 14px;
        font-weight: 600;
    }

    .tg-sectionhead h2 {
        font-family: 'Open Sans', Arial, Helvetica, sans-serif !important;
        font-weight: 500;
    }

    .tg-booktitle h3 {
        height: 35px;
    }

    .tg-booktitle h2 {
        font-family: 'Open Sans', Arial, Helvetica, sans-serif !important;
    }
    </style>
    <script src="fontend/public/templates/book/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script data-ad-client="ca-pub-6175913672540520" async src="../pagead2.googlesyndication.com/pagead/js/f.txt">
    </script>
</head>

<body class="tg-home tg-homevtwo">
    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        <!--************************************
				Header Start
		*************************************-->
        <header id="tg-header" class="tg-header tg-headervtwo tg-haslayout">

            <div class="tg-middlecontainer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <strong class="tg-logo"><a href="">
                                    <img width="120px;" src="fontend/image/logo.png"
                                        alt="company name here"></a></strong>
                            <div class="tg-searchbox">
                                <form action="http://dreambook.vn/tim-kiem.html" method="get"
                                    class="tg-formtheme tg-formsearch">
                                    <input type="hidden" name="_token" value="9qjcAguTdU9WBwgu9ogJAvpbSaJ7saW1OBXXssjH">
                                    <fieldset>
                                        <input type="text" name="search" class="typeahead form-control"
                                            placeholder="Tìm sách...">
                                        <button type="submit" class="tg-btn">Tìm</button>
                                    </fieldset>
                                    <a href="javascript:void(0);">Tìm sách nào</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tg-navigationarea">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-navigationholder">
                                <nav id="tg-nav" class="tg-nav">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#tg-navigation" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                        <ul>
                                            <li class="menu-item-has-children menu-item-has-mega-menu">
                                                <a href="javascript:void(0);">DANH MỤC SÁCH</i></a>
                                                <ul class="sub-menu">
                                                    @foreach($cate as $cate)
                                                    @if($cate->status == 1)
                                                    <li class=""><a href="">{{$cate->name}}</a>
                                                    </li>
                                                    @else
                                                    @endif
                                                    @endforeach
                                                </ul>

                                            </li>
                                            <li class="current-menu-item">
                                                <a href="{{ route('homepage') }}">Trang chủ</a>
                                            </li>
                                            <li class="">
                                                <a href="su-kien-sale.html">Sự kiện Sale</a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('introduce') }}">Giới thiệu</a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('tutorial') }}">Hướng dẫn</a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('policy') }}">Chính sách</a>
                                            </li>
                                            <li class="">
                                                <a href="tin-tuc.html">Tin tức</a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('contact') }}">Liên hệ</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                                <div class="tg-wishlistandcart">
                                    <div class="dropdown tg-themedropdown tg-minicartdropdown">
                                        <a href="gio-hang/kiem-tra-don-hang.html" class="tg-btnthemedropdown"
                                            title="Kiểm tra tình trạng đơn hàng">
                                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="dropdown tg-themedropdown tg-minicartdropdown">
                                        <a href id="cart" class="tg-btnthemedropdown tg-minicart-o" data-toggle="dropdown">
                                            <span class="tg-themebadge" id="tg-themebadge">0</span>
                                            <i class="icon-cart"></i>
                                        </a>
                                        <div class="dropdown-menu tg-themedropdownmenu" id="view-cart"
                                            aria-labelledby="tg-minicart">
                                            <div class="tg-minicartbody">
                                                <div class="tg-minicarproduct">
                                                    <figure style="width:100%">
                                                        <span>Giỏ hàng</span><span
                                                            style="position: absolute;right: -30px;"><a
                                                                class="tg-minicart-o" href="javascript:void(0);"><i
                                                                    class="fa fa-times"
                                                                    aria-hidden="true"></i></a></span>
                                                    </figure>
                                                </div>

                                            </div>
                                            <div class="tg-minicartbody" id="tg-minicartbody">
                                                <div class="tg-minicarproduct">
                                                    <figure>
                                                        <img src="public/templates/book/images/products/img-01.jpg"
                                                            alt="image description">

                                                    </figure>
                                                    <div class="tg-minicarproductdata">
                                                        <h5><a href="javascript:void(0);">Our State Fair Is A Great
                                                                Function</a></h5>
                                                        <h6><a href="javascript:void(0);">$ 12.15</a></h6>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tg-minicartfoot">
                                                <div style="height:29px">
                                                    <span class="tg-subtotal">Ship: <strong
                                                            id="price-ship">35,000đ</strong></span>
                                                </div>
                                                <div>
                                                    <a class="tg-btnemptycart" onclick="delCart()"
                                                        href="javascript:void(0);">
                                                        <i class="fa fa-trash-o"></i>
                                                        <span>Hủy giỏ hàng</span>
                                                    </a>
                                                    <span class="tg-subtotal">Tổng: <strong
                                                            id="tg-subtotal">35.78</strong></span>
                                                </div>
                                                <form action="javascript:void(0)" id="order_form">
                                                    <input type="text" id="name" name="name" value=""
                                                        class="form-control input-cart" placeholder="Họ tên*">
                                                    <input type="text" id="phone" name="phone" value=""
                                                        class="form-control input-cart" placeholder="Số điện thoại*">
                                                    <input type="text" id="address" name="address"" value="" class="
                                                        form-control input-cart" placeholder="Địa chỉ*">
                                                    <div class="tg-btns">
                                                        <button type="submit" class="tg-btn"
                                                            href="javascript:void(0);">Đặt hàng</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown tg-themedropdown tg-wishlistdropdown">
                                        <a href="javascript:void(0);" class="tg-btnthemedropdown mobile-search">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </a>
                                        <div class="book-search">
                                            <form action="http://dreambook.vn/tim-kiem.html" method="get">
                                                <input type="hidden" name="_token"
                                                    value="9qjcAguTdU9WBwgu9ogJAvpbSaJ7saW1OBXXssjH">
                                                <a href="javascript:void(0);" class="mobile-search"><i
                                                        class="fa fa-times" aria-hidden="true"></i></a>
                                                <input type="text" name="search" placeholder="Tìm sách...">
                                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--************************************
				Header End
		*************************************-->
        <!--************************************
        Home Slider Start
*************************************-->
        @yield('content')

        <!--************************************
				Footer Start
		*************************************-->
        <footer id="tg-footer" class="tg-footer tg-haslayout">
            <div class="tg-footerarea">
                <div class="container">
                    <div class="row">
                        <div class="tg-threecolumns">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="tg-footercol">
                                    <strong class="tg-logo"><a href="javascript:void(0);"><img width="120px;"
                                                src="fontend/image/logo.png" alt="image description"></a></strong>
                                    <ul class="tg-contactinfo">
                                        <li>
                                            <i class="icon-apartment"></i>
                                            <address>Hà Nội - Việt Nam</address>
                                        </li>
                                        <li>
                                            <i class="icon-phone-handset"></i>
                                            <span>
                                                <em>0908315217 </em>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="icon-clock"></i>
                                            <span>24/24</span>
                                        </li>
                                        <li>
                                            <i class="icon-envelope"></i>
                                            <span>
                                                <em><a
                                                        href="mailto:nhasachquockim@gmail.com">nhasachquockim@gmail.com</a></em>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="icon-facebook"></i>
                                            <span>
                                                <em><a
                                                        href="http://facebook.com/nsQuocKim.vn/">http://facebook.com/nsQuocKim.vn/</a></em>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="tg-footercol tg-widget tg-widgetnavigation">
                                    <div class="tg-widgettitle">
                                        <h3>Các từ khóa hot</h3>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <ul>
                                            <li><a href="javascript:void(0);">Sách hay</a></li>
                                            <li><a href="javascript:void(0);">Sách Toán</a></li>
                                            <li><a href="javascript:void(0);">Sách Tiếng Anh</a></li>
                                            <li><a href="javascript:void(0);">Sách Hóa Học</a></li>
                                            <li><a href="javascript:void(0);">Sác Luyện thi HSG</a></li>
                                            <li><a href="javascript:void(0);">Sách Luyện thi đại học</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="javascript:void(0);">Sách Lich sử</a></li>
                                            <li><a href="javascript:void(0);">Sách Ngữ Văn</a></li>
                                            <li><a href="javascript:void(0);">Sách Địa lý</a></li>
                                            <li><a href="javascript:void(0);">Sách ôn thi lên lớp 10</a></li>
                                            <li><a href="javascript:void(0);">Sách tham khảo</a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="tg-footercol tg-widget tg-widgettopsellingauthors">
                                    <div class="tg-widgettitle">
                                        <h3>Bán sách bằng cả trái tim !</h3>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <ul>
                                            <li>

                                                <div class="tg-authornamebooks">
                                                    <h4><a href="javascript:void(0);">Sách luyện thi THPTQG</a></h4>
                                                </div>
                                            </li>
                                            <li>

                                                <div class="tg-authornamebooks">
                                                    <h4><a href="javascript:void(0);">Sách Luyện Thi HSG</a></h4>

                                                </div>
                                            </li>
                                            <li>

                                                <div class="tg-authornamebooks">
                                                    <h4><a href="javascript:void(0);">Sách Luyện Thi Lên Lớp 10</a></h4>

                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tg-footerbar">
                <a id="tg-btnbacktotop" class="tg-btnbacktotop" href="javascript:void(0);"><i
                        class="icon-chevron-up"></i></a>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <span class="tg-copyright">Website được thiết kết bởi DreamBook</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--************************************
				Footer End
		*************************************-->
        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v5.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = '../connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>

        <!-- Your customer chat code -->
        <div class="fb-customerchat" attribution=setup_tool page_id="1183020388546960" theme_color="#6BA136"
            logged_in_greeting="Chào em, em cần tư vấn gì nhỉ ?" logged_out_greeting="Chào em, em cần tư vấn gì nhỉ ?">
        </div>

        <!--************************************
			Wrapper End
	*************************************-->
        <script>
        function() {

            $("#cart").on("click", function() {
                $(".shopping-cart").fadeToggle("fast");
            });

        }();
        </script>
        <script src="fontend/public/templates/book/js/vendor/jquery-library.js"></script>
        <script src="fontend/public/templates/book/js/vendor/bootstrap.min.js"></script>
        <script src="fontend/public/templates/book/js/owl.carousel.min.js"></script>
        <script src="fontend/public/templates/book/js/jquery.vide.min.js"></script>
        <script src="fontend/public/templates/book/js/countdown.js"></script>
        <script src="fontend/public/templates/book/js/jquery-ui.js"></script>
        <script src="fontend/public/templates/book/js/parallax.js"></script>
        <script src="fontend/public/templates/book/js/countTo.js"></script>
        <script src="fontend/public/templates/book/js/appear.js"></script>
        <script src="fontend/public/templates/book/js/gmap3.js"></script>
        <script src="fontend/public/templates/book/js/main.js"></script>
        <script src="fontend/public/templates/book/sweetalert-dev.js"></script>
        <script src="fontend/public/templates/book/js/jquery.validate.min.js"></script>


</body>

<!-- Mirrored from dreambook.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jun 2021 03:29:16 GMT -->

</html>