<header id="tg-header" class="tg-header tg-headervtwo tg-haslayout">

    <div class="tg-middlecontainer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    
                    <strong class="tg-logo">
                    <div class="flex">
                        <div><a href="">
                            <img width="150px;" src="fontend/image/logob1.png" alt="company name here">
                        </a></div>
                        <div class=""><img width="200px;"  src="fontend/image/logo222.png" alt="company name here"></div>
                    </div>
                    </strong>
                    <div class="tg-searchbox">
                        <form  action="" method="get" class="tg-formtheme tg-formsearch">
                            <input type="hidden" name="_token" value="9qjcAguTdU9WBwgu9ogJAvpbSaJ7saW1OBXXssjH">
                            <fieldset class="">
                                <input  type="text" name="search" class="typeahead form-control"
                                    placeholder="Tìm sách...">
                                <button type="submit" class="tg-btn">Tìm</button>
                            </fieldset>
                            <!-- <a href="javascript:void(0);">Tìm sách nào</a> -->
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
                                            <li class=""><a href="danh-muc-sach/{{$cate->id}}">{{$cate->name}}</a>
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
                                        <a href="{{ route('sukiensale') }}">Sự kiện Sale</a>
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
                                        <a href="{{ route('tintuc') }}">Tin tức</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('contact') }}">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="tg-wishlistandcart">
                            <div class="dropdown tg-themedropdown tg-minicartdropdown">
                                <a href="" class="tg-btnthemedropdown" title="Kiểm tra tình trạng đơn hàng">
                                    <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="dropdown tg-themedropdown tg-minicartdropdown">
                                <a href="login" class="tg-btnthemedropdown" title="Login">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="dropdown tg-themedropdown tg-minicartdropdown">
                                <a href id="cart" class="tg-btnthemedropdown tg-minicart-o" data-toggle="dropdown">
                                    <span class="tg-themebadge" id="tg-themebadge">{{Cart::count()}}</span>
                                    <i class="icon-cart"></i>
                                </a>
                                <div class="dropdown-menu tg-themedropdownmenu" id="view-cart"
                                    aria-labelledby="tg-minicart">
                                    @if(Cart::count() != "")
                                    <div class="tg-minicartbody">
                                        <div class="tg-minicarproduct">
                                            <figure style="width:100%">
                                                <span>Giỏ hàng</span><span style="position: absolute;right: -30px;"><a
                                                        class="tg-minicart-o" href="javascript:void(0);"><i
                                                            class="fa fa-times" aria-hidden="true"></i></a></span>
                                            </figure>
                                        </div>

                                    </div>
                                    <div class="tg-minicartbody" id="tg-minicartbody">
                                        @foreach($listCart as $cart)
                                        <div class="tg-minicarproduct">
                                            <figure>
                                                <img src="upload/product/{{$cart->options->image}}" width="50"
                                                    alt="image description">

                                            </figure>
                                            <div class="tg-minicarproductdata">
                                                <h5><a href="javascript:void(0);">{{$cart->name}}</a></h5>
                                                <h5><a href="javascript:void(0);">{{$cart->qty}}</a></h5>
                                                <h6><a href="javascript:void(0);">{{number_format($cart->price,0,'','.')}}
                                                        đ</a></h6>
                                            </div>
                                            <div>
                                                <a href="deleteCart/{{$cart->id}}"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                    <div class="tg-minicartfoot">
                                        <div>
                                            <a class="tg-btnemptycart" onclick="delCart()" href="deleteCart/all">
                                                <i class="fa fa-trash-o"></i>
                                                <span>Hủy giỏ hàng</span>
                                            </a>
                                            <span class="tg-subtotal">Tổng: <strong
                                                    id="tg-subtotal">{{Cart::subTotal()}}</strong></span>
                                        </div>
                                        <form action="order" id="order_form" method="post">
                                            @csrf
                                            <input type="text" id="name" name="name" value=""
                                                class="form-control input-cart" placeholder="Họ tên*">
                                            <input type="text" id="phone" name="phone" value=""
                                                class="form-control input-cart" placeholder="Số điện thoại*">
                                            <input type="text" id="address" name="address" value="" class="
                                                    form-control input-cart" placeholder="Địa chỉ*">
                                            <div class="tg-btns">
                                                <button type="submit" class="tg-btn">Đặt
                                                    hàng</button>
                                            </div>
                                        </form>
                                    </div>
                                    @elseif(Cart::count() == "")
                                    <p>Giỏ hàng rỗng</p>
                                    @endif
                                </div>
                            </div>
                            <div class="dropdown tg-themedropdown tg-wishlistdropdown">
                                <a href="javascript:void(0);" class="tg-btnthemedropdown mobile-search">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </a>
                                <div class="book-search">
                                    <form action="" method="get">
                                        <input type="hidden" name="_token"
                                            value="9qjcAguTdU9WBwgu9ogJAvpbSaJ7saW1OBXXssjH">
                                        <a href="javascript:void(0);" class="mobile-search"><i class="fa fa-times"
                                                aria-hidden="true"></i></a>
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