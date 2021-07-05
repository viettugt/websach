<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ek+Mukta">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<style>
ul {
    width: 100%;
    list-style-type: none;
    overflow: hidden;

    padding: 14px 16px;

}

li {
    float: left;
}

li a {
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.footer {
    background: #dddddd;
}

.menu {
    background-color: #6BA136;
}

.dropdown-menu {
    background: #6BA136;
}


.menu-drop a {
   
    line-height: 40px;
    margin-left: 30px;
    color: black;
    text-decoration: none;
}
.menu-drop a:hover{
    text-decoration: underline;
    color:white;
}
</style>

<body>
    <div class="">
        <div class="container" style="display: flex; ">
            <div>
                <a href="{{route('homepage')}}">
                    <img style="height:70px;" src="./fontend/image/logo.png" alt="">
                </a>
            </div>
            <div style="padding-top:15px;">
                <form action="/action_page.php">
                    <input style="padding:10px 54px 10px 20px" type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="menu">
            <div class="container">
                <div class="dropdown show menu-drop">
                    <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Danh mục
                    </a>
                    <a href="{{ route('homepage') }}">Trang chủ</a>
                    <a href="">Sự kiện Sale</a>
                    <a href="{{ route('introduce') }}">Giới Thiệu</a>
                    <a href="{{ route('tutorial') }}">Hướng dẫn</a>
                    <a href="{{ route('policy') }}">Chính sách</a>
                    <a href="">Tin tức</a>
                    <a href="{{ route('contact') }}">Liên hệ</a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        {{--
                            @foreach($category as $cate)
                            @if($cate->status == 1)
                            <a class="dropdown-item" href="#">{{$cate->name}}</a>
                        @else
                        @endif
                        @endforeach
                        --}}
                    </div>
                </div>
                {{--<ul>
                    <li><a href="">Danh mục sách</a></li>
                    <li><a href="{{ route('homepage') }}">Trang chủ</a></li>
                <li><a href="">Sự kiện Sale</a></li>
                <li><a href="{{ route('introduce') }}">Giới Thiệu</a></li>
                <li><a href="{{ route('tutorial') }}">Hướng dẫn</a></li>
                <li><a href="{{ route('policy') }}">Chính sách</a></li>
                <li><a href="">Tin tức</a></li>
                <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                <a margin-left="20px;" href=""><img margin-left="20px;" src="./fontend/image/cats.png" alt=""></a>

                </ul>--}}

            </div>
        </div>


        <div>
            @yield('content')
        </div>
        <!-- footer -->

        <div class="footer ">
            <div class="container " style="padding:20px 0px 50px 0px">
                <div class="row">
                    <div class="col">
                        <div style="">
                            <img style="height:70px;margin-left:60px" src="./fontend/image/logo.png" alt="">
                            <div style="display: flex">
                                <img style="wight:32px; height:32px;" src="./fontend/image/office.png" alt="">
                                <p style="padding-left:20px; padding-top:5px">Hà Nội-Việt Nam</p>
                            </div>
                            <div style="display: flex">
                                <img style="wight:32px; height:32px;" src="./fontend/image/phone-call2.png" alt="">
                                <p style="padding-left:20px; padding-top:5px">0908315217 </p>
                            </div>
                            <div style="display: flex">
                                <img style="wight:32px; height:32px;" src="./fontend/image/clock.png" alt="">
                                <p style="padding-left:20px; padding-top:5px">24/24 </p>
                            </div>
                            <div style="display: flex">
                                <img style="wight:32px; height:32px;" src="./fontend/image/gmail2.png" alt="">
                                <p style="padding-left:20px; padding-top:5px">Nhasachquockim@gmail.com</p>
                            </div>
                            <div style="display: flex">
                                <img style="wight:32px; height:32px;" src="./fontend/image/facebook.png" alt="">
                                <a style="padding-left:20px; padding-top:5px">https://www.facebook.com/nsQuocKim.vn/</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h6 style=:margin-top:10px>Các từ khóa hot</h6>
                        <hr>
                        <div class="">


                        </div>
                    </div>

                    <div class="col">
                        <h6>Có sách là có ước mơ!</h6>
                        <hr>
                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>