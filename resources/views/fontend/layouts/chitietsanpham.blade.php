@extends('fontend.layouts.master')
@section('title')
Chi tiết sản phẩm
@endsection
@section('content')



{{--@if (session('thongbao_cart'))
<div class="alert alert-warning text-center">
    <h1 class="text-danger">{{ session('thongbao_cart') }}</h1>
</div>

@endif--}}


<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600"
    data-parallax="scroll" data-image-src="..fontend/public/templates/book/images/parallax/bgparallax-07.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-innerbannercontent">
                    <h1>{{$detailpr->name}}</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<main id="tg-main" class="tg-main tg-haslayout">
    <!--************************************
            News Grid Start
    *************************************-->
    <div class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-twocolumns" class="tg-twocolumns">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
                        <div id="tg-content" class="tg-content">
                            <div class="tg-productdetail">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="tg-postbook">
                                            <figure class="tg-featureimg"><img src="upload/product/{{$detailpr->image}}"
                                                    alt="image description"></figure>
                                            <div class="tg-postbookcontent">
                                                <span class="tg-bookprice">
                                                    <ins id="price">{{$detailpr->price}} đ</ins>
                                                </span>
                                                <div class="tg-quantityholder">
                                                    <em class="minus">-</em>
                                                    <input type="text" class="result" value="1" id="quantity"
                                                        name="quantity">
                                                    <em class="plus">+</em>
                                                </div>
                                                <a id="add-product" data-id_product="40"
                                                    class="tg-btn tg-active tg-btn-lg"
                                                    href="{{route('getAddCart',['id'=>$detailpr->id])}}">Thêm
                                                    vảo giỏ hàng</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="tg-productcontent">
                                            <ul class="tg-bookscategories">
                                                <li><a href="../sach-toan-3.html">Sách Toán</a></li>
                                                <li><a href="../luyen-thi-toan.html">Sách luyện thi Toán</a></li>
                                            </ul>

                                            <div class="tg-booktitle">
                                                <h2>{{$detailpr->name}}</h2>
                                            </div>
                                            <div class="tg-booktitle">
                                                Mã Sách: <span
                                                    style="color: red;font-size: 20px;font-weight: 700;">TK05</span>
                                            </div>
                                            <div class="tg-booktitle">
                                                <a href="https://newshop.vn/preview/9298" target="_blank"
                                                    style="background: #6ba036; padding: 5px 20px;border-radius: 3px;color: white;">
                                                    <i class="fa fa-book" aria-hidden="true"></i> Đọc thử sách
                                                </a>
                                            </div>
                                            <span class="tg-stars-e">
                                                <span class='fa fa-star'></span>
                                                <span class='fa fa-star'></span>
                                                <span class='fa fa-star'></span>
                                                <span class='fa fa-star'></span>
                                                <span class='fa fa-star'></span>
                                            </span>

                                            <div class="tg-sectionhead">
                                                <h3>Giới thiệu</h3>
                                            </div>
                                            <div class="tg-description">
                                                <!-- bộ sách Combo Bứt Phá Điểm Thi THPT Quốc Gia Bằng Casio (Bộ 2 Cuốn) bao
                                                gồm tuyệt kỹ bấm máy CASIO hiện đại nhất và các bài toán chống máy tính,
                                                tư duy Toán học đơn giản để học sinh trung bình khá cũng làm được bài
                                                khó 9-10 điểm.
                                                296.000đ 207.000đ -->
                                            </div>`
                                        </div>
                                    </div>

                                    <div class="tg-productdescription">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="tg-sectionhead">
                                                <h2>Chi tiết sản phẩm</h2>
                                            </div>
                                            <ul class="tg-themetabs" role="tablist">
                                                <li role="presentation" class="active">
                                                    <a href="#description" data-toggle="tab">Chi tiết</a>
                                                </li>
                                            </ul>
                                            <div class="tg-tab-content tab-content">
                                                <div role="tabpanel" class="tg-tab-pane tab-pane active"
                                                    id="description">
                                                    <div class="tg-description">
                                                        <p>{{$detailpr->detail}}</p>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="tg-relatedproducts">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="tg-sectionhead">
                                                <h2><span>Sách ngẫu nhiên</span>Cùng danh mục</h2>
                                                <a class="tg-btn" href="javascript:void(0);">Xem thêm</a>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div id="tg-relatedproductslider"
                                                class="tg-relatedproductslider tg-relatedbooks owl-carousel">
                                                @foreach($pro1 as $showpro1)
                                                <div class="item">
                                                    <div class="">
                                                        <a href="cong-pha-toan-1.html" title="CÔNG PHÁ TOÁN 1">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="upload/product/{{$showpro1->image}}"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="cong-pha-toan-1.html"
                                                                        title="CÔNG PHÁ TOÁN 1">{{$showpro1->name}}</a></h3>
                                                            </div>
                                                            <span class="tg-stars-e">
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                            </span>
                                                            <span class="tg-bookprice">
                                                                <ins>{{$showpro1->price}} đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
                        <aside id="tg-sidebar" class="tg-sidebar">

                            <div class="tg-widget tg-catagories">
                                <div class="tg-widgettitle">
                                    <h3>Danh mục</h3>
                                </div>
                                <div class="tg-widgetcontent">
                                    <ul>
                                        @foreach($cate as $cate1)
                                        @if($cate1->status == 1)
                                        <li class="">
                                            <a href="danh-muc-sach/{{$cate1->id}}">{{$cate1->name}}</a>
                                        </li>
                                        @else
                                        @endif
                                        @endforeach

                                    </ul>
                                </div>
                            </div>

                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            News Grid End
    *************************************-->
</main>
@endsection