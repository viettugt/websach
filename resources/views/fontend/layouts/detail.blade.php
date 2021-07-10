@extends('fontend.layouts.master')
@section('title')
Danh mục
@endsection
@section('content')
<main id="tg-main" class="tg-main tg-haslayout">
    <!--************************************
            News Grid Start
    *************************************-->
    <div class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-twocolumns" class="tg-twocolumns">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right" style="margin-bottom: 50px;">
                        <div id="tg-content" class="tg-content" style="padding-bottom: 40px;">
                            <div class="tg-products">
                                <div class="tg-productgrid">
                                    <div class="tg-refinesearch">
                                        <span>20 cuốn/Trang</span>
                                        <form class="tg-formtheme tg-formsortshoitems">
                                            <fieldset>

                                                <div class="form-group">

                                                    <span class="tg-select">
                                                        <select onchange="location = this.value;">
                                                            <option value="?orderby=sp-m">Sản phẩm(mới - cũ)</option>
                                                            <option value="?orderby=sp-c">Sản phẩm(cũ - mới)</option>
                                                            <option value="?orderby=g-t">Giá(thấp - cao)</option>
                                                            <option value="?orderby=g-c">Giá(cao - thấp)</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    @foreach($pro1 as $showpro1)

                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3" style="margin-bottom: 20px;">
                                        <div class="">
                                            <a href="chi-tiet-san-pham/{{$showpro1->id}}"
                                                title="CẤP TỐC 789+ TỔNG HỢP ÔN THI THPT QUỐC GIA MÔN HÓA">
                                                <figure class="tg-featureimg">
                                                    <div class="tg-bookimg">
                                                        <div class="tg-frontcover"><img
                                                                src="upload/product/{{$showpro1->image}}"
                                                                alt="CẤP TỐC 789+ TỔNG HỢP ÔN THI THPT QUỐC GIA MÔN HÓA">
                                                        </div>
                                                    </div>
                                                </figure>
                                            </a>
                                            <div class="tg-postbookcontent">
                                                <div class="tg-booktitle">
                                                    <h3><a href="chi-tiet-san-pham/{{$showpro1->id}}"
                                                            title="CẤP TỐC 789+ TỔNG HỢP ÔN THI THPT QUỐC GIA MÔN HÓA"
                                                            style="font-family: 'Open Sans', Arial, Helvetica, sans-serif !important;">{{$showpro1->name}}</a>
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
                                <nav>
                                {!! $list_product->render() !!}
                                </nav>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
                        @include('fontend.layouts.danhmuc')
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