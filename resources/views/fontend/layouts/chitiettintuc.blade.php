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
                            <p class="font-weight-bold">{{$detailTT->name}}</p>
                            </div>
                            <div>{{$detailTT->detail}}</div>
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