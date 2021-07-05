@extends('fontend.layouts.master')
@section('title')
Chi tiết sản phẩm
@endsection
@section('content')
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
                                                    class="tg-btn tg-active tg-btn-lg" href="Cart::add($rowId)">Thêm
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
                                                <div class="item">
                                                    <div class="">
                                                        <a href="cong-pha-toan-1.html" title="CÔNG PHÁ TOÁN 1">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/tutTNMxQnAdFAdAUsDPYpV1b4VhwmKGTvGgMPZCU.png"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="cong-pha-toan-1.html"
                                                                        title="CÔNG PHÁ TOÁN 1">CÔNG PHÁ TOÁN 1</a></h3>
                                                            </div>
                                                            <span class="tg-stars-e">
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                            </span>
                                                            <span class="tg-bookprice">
                                                                <ins>80,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <a href="xoy-toan-phuong-phap-giai-trac-nghiem-toan.html"
                                                            title="XOY TOÁN - PHƯƠNG PHÁP GIẢI TRẮC NGHIỆM TOÁN">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/ml3iWTkS8G4qnx1vaxiaE179mSOuLRR9CSwDsBOE.png"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="xoy-toan-phuong-phap-giai-trac-nghiem-toan.html"
                                                                        title="XOY TOÁN - PHƯƠNG PHÁP GIẢI TRẮC NGHIỆM TOÁN">XOY
                                                                        TOÁN - PHƯƠNG PHÁP GIẢI TRẮC NGHIỆM TOÁN</a>
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
                                                                <ins>65,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <a href="thu-thuat-su-dung-may-tinh-tu-a-den-z.html"
                                                            title="THỦ THUẬT SỬ DỤNG MÁY TÍNH TỪ A ĐẾN Z">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/blXdVwAiYHd3XdEOZ4gqY2D0Wm1OrOF5oTT9gZPu.png"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="thu-thuat-su-dung-may-tinh-tu-a-den-z.html"
                                                                        title="THỦ THUẬT SỬ DỤNG MÁY TÍNH TỪ A ĐẾN Z">THỦ
                                                                        THUẬT SỬ DỤNG MÁY TÍNH TỪ A ĐẾN Z</a></h3>
                                                            </div>
                                                            <span class="tg-stars-e">
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                            </span>
                                                            <span class="tg-bookprice">
                                                                <ins>55,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <a href="7-ngay-dat-diem-toi-da-mu-va-logarit.html"
                                                            title="7 NGÀY ĐẠT ĐIỂM TỐI ĐA MŨ VÀ LOGARIT">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/BAN0QozmMBYhjYRKxh6ZP9tCKri5QJGfiZ1e91a3.png"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="7-ngay-dat-diem-toi-da-mu-va-logarit.html"
                                                                        title="7 NGÀY ĐẠT ĐIỂM TỐI ĐA MŨ VÀ LOGARIT">7
                                                                        NGÀY ĐẠT ĐIỂM TỐI ĐA MŨ VÀ LOGARIT</a>
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
                                                                <ins>55,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <a href="cong-pha-toan-3.html" title="CÔNG PHÁ TOÁN 3">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/Ro131F3gdkRNHlGRHZKT8bN2Nf1wIXcEgJA6gxkG.png"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="cong-pha-toan-3.html"
                                                                        title="CÔNG PHÁ TOÁN 3">CÔNG PHÁ TOÁN 3</a></h3>
                                                            </div>
                                                            <span class="tg-stars-e">
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                            </span>
                                                            <span class="tg-bookprice">
                                                                <ins>100,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <a href="cc-than-toc-luyen-de-2021-mon-toan-chinh-phuc-ki-thi-tot-nghiep-thpt-va-thi-vao-cac-truong-dai-hoc-cao-dang.html"
                                                            title="CC Thần tốc luyện đề 2021 môn Toán chinh phục kì thi tốt nghiệp THPT và thi vào các trường đại học, cao đẳng">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/9RJH5uGO0tMjUAtotO8BsHNBMEDxj4M2UE75OQ9o.png"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="cc-than-toc-luyen-de-2021-mon-toan-chinh-phuc-ki-thi-tot-nghiep-thpt-va-thi-vao-cac-truong-dai-hoc-cao-dang.html"
                                                                        title="CC Thần tốc luyện đề 2021 môn Toán chinh phục kì thi tốt nghiệp THPT và thi vào các trường đại học, cao đẳng">CC
                                                                        Thần tốc luyện đề 2021 môn Toán chinh phục kì
                                                                        thi tốt nghiệp THPT và thi vào các trường đại
                                                                        học, cao đẳng</a></h3>
                                                            </div>
                                                            <span class="tg-stars-e">
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                            </span>
                                                            <span class="tg-bookprice">
                                                                <ins>55,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <a href="cong-pha-ky-thuat-casio.html"
                                                            title="CÔNG PHÁ KỸ THUẬT CASIO">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/PgWaD9nXM4GtVHhHZyBtkE3hTxsnjvhTtuRUGcYI.png"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="cong-pha-ky-thuat-casio.html"
                                                                        title="CÔNG PHÁ KỸ THUẬT CASIO">CÔNG PHÁ KỸ
                                                                        THUẬT CASIO</a></h3>
                                                            </div>
                                                            <span class="tg-stars-e">
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                            </span>
                                                            <span class="tg-bookprice">
                                                                <ins>80,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <a href="cam-nang-toan-tich-phan-va-so-phuc.html"
                                                            title="CẨM NANG TOÁN - TÍCH PHÂN VÀ SỐ PHỨC">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/E9OFjlpLOJFlIhxE8CdVIjTbTUOVayBtarSEfVzu.png"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="cam-nang-toan-tich-phan-va-so-phuc.html"
                                                                        title="CẨM NANG TOÁN - TÍCH PHÂN VÀ SỐ PHỨC">CẨM
                                                                        NANG TOÁN - TÍCH PHÂN VÀ SỐ PHỨC</a></h3>
                                                            </div>
                                                            <span class="tg-stars-e">
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                            </span>
                                                            <span class="tg-bookprice">
                                                                <ins>55,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <a href="cap-toc-789-tong-hop-on-thi-thpt-quoc-gia-mon-toan.html"
                                                            title="CẤP TỐC 789+ TỔNG HỢP ÔN THI THPT QUỐC GIA MÔN TOÁN">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/lHb0t1xRFasrrNTKuooTBIfEEpRDQfZDn9BwhjqE.png"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="cap-toc-789-tong-hop-on-thi-thpt-quoc-gia-mon-toan.html"
                                                                        title="CẤP TỐC 789+ TỔNG HỢP ÔN THI THPT QUỐC GIA MÔN TOÁN">CẤP
                                                                        TỐC 789+ TỔNG HỢP ÔN THI THPT QUỐC GIA MÔN
                                                                        TOÁN</a></h3>
                                                            </div>
                                                            <span class="tg-stars-e">
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                            </span>
                                                            <span class="tg-bookprice">
                                                                <ins>55,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <a href="dot-pha-8-ki-thi-thpt-quoc-gia-mon-toan-tap-2-hinh-hoc.html"
                                                            title="ĐỘT PHÁ 8+: KÌ THI THPT QUỐC GIA - MÔN TOÁN - TẬP 2: HÌNH HỌC">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/1yH01rAwhEfj4oGy0YwavKImyRmiJrhzqJKstLrV.png"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="dot-pha-8-ki-thi-thpt-quoc-gia-mon-toan-tap-2-hinh-hoc.html"
                                                                        title="ĐỘT PHÁ 8+: KÌ THI THPT QUỐC GIA - MÔN TOÁN - TẬP 2: HÌNH HỌC">ĐỘT
                                                                        PHÁ 8+: KÌ THI THPT QUỐC GIA - MÔN TOÁN - TẬP 2:
                                                                        HÌNH HỌC</a></h3>
                                                            </div>
                                                            <span class="tg-stars-e">
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                            </span>
                                                            <span class="tg-bookprice">
                                                                <ins>55,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <a href="infographic-chinh-phuc-ki-thi-thpt-quoc-gia-mon-toan.html"
                                                            title="INFOGRAPHIC CHINH PHỤC KÌ THI THPT QUỐC GIA MÔN TOÁN">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/IGTLwkl9zIZeUxxWqEssTTnUjZqXb3fNe1MAL60h.jpg"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="infographic-chinh-phuc-ki-thi-thpt-quoc-gia-mon-toan.html"
                                                                        title="INFOGRAPHIC CHINH PHỤC KÌ THI THPT QUỐC GIA MÔN TOÁN">INFOGRAPHIC
                                                                        CHINH PHỤC KÌ THI THPT QUỐC GIA MÔN TOÁN</a>
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
                                                                <ins>65,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <a href="on-luyen-thi-trac-nghiem-thpt-quoc-gia-nam-2019-mon-toan.html"
                                                            title="ÔN LUYỆN THI TRẮC NGHIỆM THPT QUỐC GIA NĂM 2019 MÔN TOÁN">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/9A2XACwXwOsLjTFbSLpISZE9Z5Jk1rcLeA82nM5T.jpeg"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="on-luyen-thi-trac-nghiem-thpt-quoc-gia-nam-2019-mon-toan.html"
                                                                        title="ÔN LUYỆN THI TRẮC NGHIỆM THPT QUỐC GIA NĂM 2019 MÔN TOÁN">ÔN
                                                                        LUYỆN THI TRẮC NGHIỆM THPT QUỐC GIA NĂM 2019 MÔN
                                                                        TOÁN</a></h3>
                                                            </div>
                                                            <span class="tg-stars-e">
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                            </span>
                                                            <span class="tg-bookprice">
                                                                <ins>65,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <a href="14-ngay-dat-diem-toi-da-ham-so-va-cac-bai-toan-lien-quan.html"
                                                            title="14 NGÀY ĐẠT ĐIỂM TỐI ĐA - HÀM SỐ VÀ CÁC BÀI TOÁN LIÊN QUAN">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/qop6Qj39UNlkaaWtKflaVkscxkqq0Mz66wQkyOrC.png"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="14-ngay-dat-diem-toi-da-ham-so-va-cac-bai-toan-lien-quan.html"
                                                                        title="14 NGÀY ĐẠT ĐIỂM TỐI ĐA - HÀM SỐ VÀ CÁC BÀI TOÁN LIÊN QUAN">14
                                                                        NGÀY ĐẠT ĐIỂM TỐI ĐA - HÀM SỐ VÀ CÁC BÀI TOÁN
                                                                        LIÊN QUAN</a></h3>
                                                            </div>
                                                            <span class="tg-stars-e">
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                            </span>
                                                            <span class="tg-bookprice">
                                                                <ins>55,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <a href="luyen-toc-do-giai-nhanh-trac-nghiem-hinh-hoc-khong-gian-oxyz.html"
                                                            title="LUYỆN TỐC ĐỘ GIẢI NHANH TRẮC NGHIỆM HÌNH HỌC KHÔNG GIAN OXYZ">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/csr0ECDcgP6BvijzEppfmQmHmgWclGfgeepvTLfn.jpg"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="luyen-toc-do-giai-nhanh-trac-nghiem-hinh-hoc-khong-gian-oxyz.html"
                                                                        title="LUYỆN TỐC ĐỘ GIẢI NHANH TRẮC NGHIỆM HÌNH HỌC KHÔNG GIAN OXYZ">LUYỆN
                                                                        TỐC ĐỘ GIẢI NHANH TRẮC NGHIỆM HÌNH HỌC KHÔNG
                                                                        GIAN OXYZ</a></h3>
                                                            </div>
                                                            <span class="tg-stars-e">
                                                                <span class='fa fa-star-o'></span>
                                                                <span class='fa fa-star-o'></span>
                                                                <span class='fa fa-star-o'></span>
                                                                <span class='fa fa-star-o'></span>
                                                                <span class='fa fa-star-o'></span>
                                                            </span>
                                                            <span class="tg-bookprice">
                                                                <ins>95,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <a href="chinh-phuc-tu-a-den-z-hinh-khong-gian.html"
                                                            title="CHINH PHỤC TỪ A ĐẾN Z - HÌNH KHÔNG GIAN">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/FZ5SjUBtHox0N1RlhquAfVQc7N6nC1FHOg1KiD43.png"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="chinh-phuc-tu-a-den-z-hinh-khong-gian.html"
                                                                        title="CHINH PHỤC TỪ A ĐẾN Z - HÌNH KHÔNG GIAN">CHINH
                                                                        PHỤC TỪ A ĐẾN Z - HÌNH KHÔNG GIAN</a></h3>
                                                            </div>
                                                            <span class="tg-stars-e">
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                            </span>
                                                            <span class="tg-bookprice">
                                                                <ins>55,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <a href="but-pha-bang-casio-chuyen-de-hinh-hoc.html"
                                                            title="BỨT PHÁ BẰNG CASIO CHUYÊN ĐỀ HÌNH HỌC">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/pSDWr26iP1UIfuQ39Ct9aHMgSBpK6iLqyKaE1HQd.png"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="but-pha-bang-casio-chuyen-de-hinh-hoc.html"
                                                                        title="BỨT PHÁ BẰNG CASIO CHUYÊN ĐỀ HÌNH HỌC">BỨT
                                                                        PHÁ BẰNG CASIO CHUYÊN ĐỀ HÌNH HỌC</a></h3>
                                                            </div>
                                                            <span class="tg-stars-e">
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                            </span>
                                                            <span class="tg-bookprice">
                                                                <ins>55,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <a href="cam-nang-toan-logarit-hinh-hoc-khong-gian-oxyz.html"
                                                            title="CẨM NANG TOÁN - LOGARIT HÌNH HỌC KHÔNG GIAN OXYZ">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/4PZHMhSC9xf7FeYjyyiTZojbwuGFS7XnGgED9n7r.png"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="cam-nang-toan-logarit-hinh-hoc-khong-gian-oxyz.html"
                                                                        title="CẨM NANG TOÁN - LOGARIT HÌNH HỌC KHÔNG GIAN OXYZ">CẨM
                                                                        NANG TOÁN - LOGARIT HÌNH HỌC KHÔNG GIAN OXYZ</a>
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
                                                                <ins>55,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <a href="so-tay-tu-nhien-5-mon-toan-ly-hoa-sinh-anh.html"
                                                            title="SỔ TAY TỰ NHIÊN ( 5 MÔN TOÁN - LÝ - HOÁ - SINH - ANH )">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/GY8YFGz51pVjqvbjvvgNrpLQcJVFxoI4Lq5lEGsF.png"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="so-tay-tu-nhien-5-mon-toan-ly-hoa-sinh-anh.html"
                                                                        title="SỔ TAY TỰ NHIÊN ( 5 MÔN TOÁN - LÝ - HOÁ - SINH - ANH )">SỔ
                                                                        TAY TỰ NHIÊN ( 5 MÔN TOÁN - LÝ - HOÁ - SINH -
                                                                        ANH )</a></h3>
                                                            </div>
                                                            <span class="tg-stars-e">
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                            </span>
                                                            <span class="tg-bookprice">
                                                                <ins>49,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <a href="cong-pha-toan-2.html" title="CÔNG PHÁ TOÁN 2">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/8rdCqT6Yl0rTkKLioCMTaalOa9YfkUt7h0oBgK3b.png"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="cong-pha-toan-2.html"
                                                                        title="CÔNG PHÁ TOÁN 2">CÔNG PHÁ TOÁN 2</a></h3>
                                                            </div>
                                                            <span class="tg-stars-e">
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                                <span class='fa fa-star'></span>
                                                            </span>
                                                            <span class="tg-bookprice">
                                                                <ins>80,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="">
                                                        <a href="but-pha-diem-thi-thpt-quoc-gia-mon-toan-tap-3.html"
                                                            title="BỨT PHÁ ĐIỂM THI THPT QUỐC GIA MÔN TOÁN TẬP 3">
                                                            <figure class="tg-featureimg">
                                                                <div class="tg-bookimg">
                                                                    <div class="tg-frontcover"><img
                                                                            src="../storage/app/files/product/zNiD1NzVsXpPXy9W93CUzznhiBPZ3xOBhqotNiEi.png"
                                                                            alt="image description"></div>
                                                                </div>
                                                            </figure>
                                                        </a>
                                                        <div class="tg-postbookcontent">
                                                            <div class="tg-booktitle">
                                                                <h3><a href="but-pha-diem-thi-thpt-quoc-gia-mon-toan-tap-3.html"
                                                                        title="BỨT PHÁ ĐIỂM THI THPT QUỐC GIA MÔN TOÁN TẬP 3">BỨT
                                                                        PHÁ ĐIỂM THI THPT QUỐC GIA MÔN TOÁN TẬP 3</a>
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
                                                                <ins>55,000 đ</ins>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
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
                                        @foreach($cate as $category)
                                        @if($category->status == 1)
                                        <li class=""><a href="">{{$category->name}}</a>
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