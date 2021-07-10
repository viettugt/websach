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
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

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
@yield('link')
<body class="tg-home tg-homevtwo">
    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        <!--************************************
				Header Start
		*************************************-->
        @include('fontend.layouts.header')
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
                                                src="fontend/image/logob1.png" alt="image description"></a></strong>
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
                            <span class="tg-copyright">Website được thiết kết bởi Quốc Kim</span>
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