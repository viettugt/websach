@extends('fontend.layouts.master')
@section('title')
header
@endsection
@section('content')
<div class="tg-middlecontainer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <strong class="tg-logo"><a href="index.html"><img
                                        src="public/templates/book/images/logo.png"
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
                                                    <li class=""><a href="sach-ban-chay.html">SÁCH BÁN CHẠY</a>
                                                        <ul class="sub-menu"></ul>
                                                    </li>
                                                    <li class=""><a href="sach-moi.html">SÁCH MỚI</a>
                                                        <ul class="sub-menu"></ul>
                                                    </li>
                                                    <li class="menu-item-has-children"><a
                                                            href="sach-luyen-thi.html">SÁCH LUYỆN THI ĐẠI HỌC</a>
                                                        <ul class="sub-menu">
                                                            <li class=""><a href="luyen-thi-toan.html">Sách luyện thi
                                                                    Toán</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="luyen-thi-ly.html">Sách luyện thi
                                                                    Lý</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="luyen-thi-hoa.html">Sách luyện thi
                                                                    Hóa</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="luyen-thi-sinh.html">Sách luyện thi
                                                                    Sinh</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="luyen-thi-anh.html">Sách luyện thi Anh
                                                                    Văn</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="luyen-thi-van.html">Sách luyện thi
                                                                    Văn</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="luyen-thi-su.html">Sách luyện thi
                                                                    Sử</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="luyen-thi-dia.html">Sách luyện thi
                                                                    Địa</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children"><a href="sach-cap-3.html">SÁCH
                                                            CẤP 3</a>
                                                        <ul class="sub-menu">
                                                            <li class=""><a href="sach-toan-3.html">Sách Toán</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="sach-ly-3.html">Sách Lý</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="sach-hoa-3.html">Sách Hóa</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="sach-sinh-3.html">Sách Sinh</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="sach-anh-3.html">Sách Anh Văn</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="sach-van-3.html">Sách Văn</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="sach-su-3.html">Sách Sử</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="sach-dia-3.html">Sách Địa</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children"><a href="sach-cap-2.html">SÁCH
                                                            CẤP 2</a>
                                                        <ul class="sub-menu">
                                                            <li class=""><a href="sachtoanc2.html">Sách Toán</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="sachvanc2.html">Sách Văn</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="sachtienganhc2.html">Sách Tiếng
                                                                    Anh</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="sachlyc2.html">Sách Lý</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="sachhoac2.html">Sách Hoá</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="sachsinhc2.html">Sách Sinh</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="sachsuc2.html">Sách Sử</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                            <li class=""><a href="sachdiac2.html">Sách Địa</a>
                                                                <ul class="sub-menu"></ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class=""><a href="sach-tieng-anh.html">SÁCH TIẾNG ANH</a>
                                                        <ul class="sub-menu"></ul>
                                                    </li>
                                                    <li class=""><a href="sach-ky-nang.html">SÁCH KỸ NĂNG</a>
                                                        <ul class="sub-menu"></ul>
                                                    </li>
                                                    <li class=""><a href="than-toc-luyen-de-2021.html">THẦN TỐC LUYỆN ĐỀ
                                                            2021</a>
                                                        <ul class="sub-menu"></ul>
                                                    </li>
                                                    <li class=""><a href="sach-so-tay.html">SÁCH SỔ TAY</a>
                                                        <ul class="sub-menu"></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="current-menu-item">
                                                <a href="index.html">Trang chủ</a>
                                            </li>
                                            <li class="">
                                                <a href="su-kien-sale.html">Sự kiện Sale</a>
                                            </li>
                                            <li class="">
                                                <a href="gioi-thieu.html">Giới thiệu</a>
                                            </li>
                                            <li class="">
                                                <a href="huong-dan-mua-sach.html">Hướng dẫn</a>
                                            </li>
                                            <li class="">
                                                <a href="chinh-sach-mua-hang.html">Chính sách</a>
                                            </li>
                                            <li class="">
                                                <a href="tin-tuc.html">Tin tức</a>
                                            </li>
                                            <li class="">
                                                <a href="lien-he.html">Liên hệ</a>
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
                                        <a href="javascript:void(0);" id="tg-minicart"
                                            class="tg-btnthemedropdown tg-minicart-o">
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
                                                    <input type="text" id="address"" name=" address"" value=""
                                                        class="form-control input-cart" placeholder="Địa chỉ*">
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
@endsection