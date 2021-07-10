@extends('fontend.layouts.master')
@section('title')
Trang chủ
@endsection
@section('content')
<style>
</style>

<div class="container">
    <div id="tg-homeslider" class="tg-homeslider tg-homeslidervtwo tg-haslayout owl-carousel">
        <a href="su-kien-sale/ra-mat-megabook-2021-sale30.html">
            <div class="item"
                style="background-image: url(fontend/storage/app/files/sale/80cCIeAV2k8Yq67VolC0bt4GxApehW9aVwvpz8c9.png);">

            </div>
        </a>
        @foreach($showslides as $slide)
        <a href="">
            <div class="item" style="background-image: url(upload/slide/{{$slide->image}});">

            </div>
        </a>
        @endforeach
    </div>
</div>
<!--************************************
        Home Slider End
*************************************-->

<!--************************************
        Main Start
*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
    <!--************************************
            Best Selling Start
    *************************************-->
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead">
                        <h2><span>Sách ngẫu nhiên</span>Sách sale</h2>
                        <a class="tg-btn" href="">Xem thêm</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="tg-bestsellingbooksslider"
                        class="slider-product-home tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">
                        @foreach($pro1 as $showpro1)

                        <div class="item">
                            <div class="">

                                <a href="/chi-tiet-san-pham/{{$showpro1->id}}"
                                    title="">
                                    <figure class="tg-featureimg">
                                        <div class="tg-bookimg">
                                            <div class="tg-frontcover"><img src="upload/product/{{$showpro1->image}}"
                                                    alt="image description"></div>
                                        </div>
                                    </figure>
                                </a>
                                <div class="tg-postbookcontent">
                                    <div class="tg-booktitle">
                                        <h3><a href=""
                                                title="">{{$showpro1->name}}</a>
                                        </h3>
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
    </section>
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead">
                        <h2><span>Sách mới</span>SÁCH BÁN CHẠY</h2>
                        <a class="tg-btn" href="">Xem thêm</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="tg-bestsellingbooksslider"
                        class="slider-product-home tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">
                        <div class="item">
                            @foreach($pro2 as $showpro2)
                            <div class="item">
                                <div class="">

                                    <a href="/chi-tiet-san-pham/{{$showpro2->id}}"
                                        title="">
                                        <figure class="tg-featureimg">
                                            <div class="tg-bookimg">
                                                <div class="tg-frontcover"><img
                                                        src="upload/product/{{$showpro2->image}}"
                                                        alt="image description"></div>
                                            </div>
                                        </figure>
                                    </a>
                                    <div class="tg-postbookcontent">
                                        <div class="tg-booktitle">
                                            <h3><a href=""
                                                    title="">{{$showpro2->name}}</a>
                                            </h3>
                                        </div>
                                        <span class="tg-stars-e">
                                            <span class='fa fa-star'></span>
                                            <span class='fa fa-star'></span>
                                            <span class='fa fa-star'></span>
                                            <span class='fa fa-star'></span>
                                            <span class='fa fa-star'></span>
                                        </span>
                                        <span class="tg-bookprice">
                                            <ins>{{$showpro2->price}} đ</ins>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead">
                        <h2><span>Sách mới</span>SÁCH MỚI</h2>
                        <a class="tg-btn" href="">Xem thêm</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="tg-bestsellingbooksslider"
                        class="slider-product-home tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">
                        @foreach($pro3 as $showpro3)
                        <div class="item">
                            <div class="">

                                <a href="/chi-tiet-san-pham/{{$showpro3->id}}"
                                    title="">
                                    <figure class="tg-featureimg">
                                        <div class="tg-bookimg">
                                            <div class="tg-frontcover"><img src="upload/product/{{$showpro3->image}}"
                                                    alt="image description"></div>
                                        </div>
                                    </figure>
                                </a>
                                <div class="tg-postbookcontent">
                                    <div class="tg-booktitle">
                                        <h3><a href=""
                                                title="">{{$showpro3->name}}</a>
                                        </h3>
                                    </div>
                                    <span class="tg-stars-e">
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                    </span>
                                    <span class="tg-bookprice">
                                        <ins>{{$showpro3->price}} đ</ins>
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead">
                        <h2><span>Sách mới</span>SÁCH LUYỆN THI ĐẠI HỌC</h2>
                        <a class="tg-btn" href="">Xem thêm</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="tg-bestsellingbooksslider"
                        class="slider-product-home tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">
                        @foreach($pro4 as $showpro4)
                        <div class="item">
                            <div class="">

                                <a href="/chi-tiet-san-pham/{{$showpro4->id}}"
                                    title="">
                                    <figure class="tg-featureimg">
                                        <div class="tg-bookimg">
                                            <div class="tg-frontcover"><img src="upload/product/{{$showpro4->image}}"
                                                    alt="image description"></div>
                                        </div>
                                    </figure>
                                </a>
                                <div class="tg-postbookcontent">
                                    <div class="tg-booktitle">
                                        <h3><a href=""
                                                title="">{{$showpro4->name}}</a>
                                        </h3>
                                    </div>
                                    <span class="tg-stars-e">
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                    </span>
                                    <span class="tg-bookprice">
                                        <ins>{{$showpro4->price}} đ</ins>
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead">
                        <h2><span>Sách mới</span>SÁCH CẤP 3</h2>
                        <a class="tg-btn" href="">Xem thêm</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="tg-bestsellingbooksslider"
                        class="slider-product-home tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">
                        @foreach($pro5 as $showpro5)
                        <div class="item">
                            <div class="">

                                <a href="/chi-tiet-san-pham/{{$showpro5->id}}"
                                    title="">
                                    <figure class="tg-featureimg">
                                        <div class="tg-bookimg">
                                            <div class="tg-frontcover"><img src="upload/product/{{$showpro5->image}}"
                                                    alt="image description"></div>
                                        </div>
                                    </figure>
                                </a>
                                <div class="tg-postbookcontent">
                                    <div class="tg-booktitle">
                                        <h3><a href=""
                                                title="">{{$showpro5->name}}</a>
                                        </h3>
                                    </div>
                                    <span class="tg-stars-e">
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                    </span>
                                    <span class="tg-bookprice">
                                        <ins>{{$showpro5->price}} đ</ins>
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead">
                        <h2><span>Sách mới</span>SÁCH CẤP 2</h2>
                        <a class="tg-btn" href="">Xem thêm</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="tg-bestsellingbooksslider"
                        class="slider-product-home tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">
                        @foreach($pro6 as $showpro6)
                        <div class="item">
                            <div class="">

                                <a href="/chi-tiet-san-pham/{{$showpro6->id}}"
                                    title="">
                                    <figure class="tg-featureimg">
                                        <div class="tg-bookimg">
                                            <div class="tg-frontcover"><img src="upload/product/{{$showpro6->image}}"
                                                    alt="image description"></div>
                                        </div>
                                    </figure>
                                </a>
                                <div class="tg-postbookcontent">
                                    <div class="tg-booktitle">
                                        <h3><a href=""
                                                title="">{{$showpro6->name}}</a>
                                        </h3>
                                    </div>
                                    <span class="tg-stars-e">
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                    </span>
                                    <span class="tg-bookprice">
                                        <ins>{{$showpro6->price}} đ</ins>
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead">
                        <h2><span>Sách mới</span>THẦN TỐC LUYỆN ĐỀ 2021</h2>
                        <a class="tg-btn" href="">Xem thêm</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="tg-bestsellingbooksslider"
                        class="slider-product-home tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">
                        @foreach($pro7 as $showpro7)
                        <div class="item">
                            <div class="">

                                <a href="/chi-tiet-san-pham/{{$showpro7->id}}"
                                    title="">
                                    <figure class="tg-featureimg">
                                        <div class="tg-bookimg">
                                            <div class="tg-frontcover"><img src="upload/product/{{$showpro7->image}}"
                                                    alt="image description"></div>
                                        </div>
                                    </figure>
                                </a>
                                <div class="tg-postbookcontent">
                                    <div class="tg-booktitle">
                                        <h3><a href=""
                                                title="">{{$showpro7->name}}</a>
                                        </h3>
                                    </div>
                                    <span class="tg-stars-e">
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                    </span>
                                    <span class="tg-bookprice">
                                        <ins>{{$showpro7->price}} đ</ins>
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead">
                        <h2><span>Sách mới</span>SÁCH SỔ TAY</h2>
                        <a class="tg-btn" href="">Xem thêm</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="tg-bestsellingbooksslider"
                        class="slider-product-home tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">
                        @foreach($pro8 as $showpro8)
                        <div class="item">
                            <div class="">

                                <a href="/chi-tiet-san-pham/{{$showpro8->id}}"
                                    title="">
                                    <figure class="tg-featureimg">
                                        <div class="tg-bookimg">
                                            <div class="tg-frontcover"><img src="upload/product/{{$showpro8->image}}"
                                                    alt="image description"></div>
                                        </div>
                                    </figure>
                                </a>
                                <div class="tg-postbookcontent">
                                    <div class="tg-booktitle">
                                        <h3><a href=""
                                                title="">{{$showpro8->name}}</a>
                                        </h3>
                                    </div>
                                    <span class="tg-stars-e">
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                        <span class='fa fa-star'></span>
                                    </span>
                                    <span class="tg-bookprice">
                                        <ins>{{$showpro8->price}} đ</ins>
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Latest News Start
    *************************************-->
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead">
                        <h2><span>Tin tức mới</span>20 tin mới nhất</h2>
                        <a class="tg-btn" href="">Xem thêm</a>
                    </div>
                </div>
                <div id="tg-postslider" class="tg-postslider tg-blogpost owl-carousel">
                @foreach($tintuc as $tintucnew)
                    <article class="item tg-post">
                        <figure><a
                                href="/chi-tiet-tin-tuc/{{$tintucnew->id}}"><img
                                    src="upload/tintuc/{{$tintucnew->image}}"
                                    alt="CC Thần tốc luyện đề 2021 sách LUYỆN ĐỀ SỚM cho 2k3 bứt phá 9-10 thi THPT QG 2021"></a>
                        </figure>
                        <div class="tg-postcontent">
                            <div class="tg-posttitle">
                                <h3><a
                                        href="/chi-tiet-tin-tuc/{{$tintucnew->id}}">CC
                                        {{$tintucnew->name}}</a></h3>
                            </div>
                        </div>
                    </article>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Latest News End
    *************************************-->
</main>
<!--************************************
        Main End
*************************************-->

@endsection