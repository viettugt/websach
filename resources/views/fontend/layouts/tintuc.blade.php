@extends('fontend.layouts.master')
@section('title')
Giới thiệu
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
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
                        <div id="tg-content" class="tg-content">
                            <div class="tg-newsgrid">
                                <div class="tg-sectionhead">
                                    <h2><span>Hôm nay có gì mới không nào !</span></h2>
                                </div>
                                <div class="row">
                                    @foreach($tintuc as $showtintuc)
                                    <div class="col-xs-6 col-sm-12 col-md-6 col-lg-4">
                                        <article class="tg-post">
                                            <figure><a href="/chi-tiet-tin-tuc/{{$showtintuc->id}}" title="">
                                                    <img src="upload/tintuc/{{$showtintuc->image}}" alt="">
                                                </a></figure>
                                            <div class="tg-postcontent">
                                                <div class="tg-posttitle">
                                                    <h3><a href="/chi-tiet-tin-tuc/{{$showtintuc->id}}"
                                                            title="">{{$showtintuc->name}}</a></h3>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    @endforeach
                                </div>

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