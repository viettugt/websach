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