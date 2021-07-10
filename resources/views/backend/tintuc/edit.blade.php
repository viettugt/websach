@extends('backend.layout.master')
@section('title')
Sửa tin tức
@endsection
@section('content')
<div class="pl-10">
    <h2 class="text-3xl pt-3">Sửa tin tức</h2>
    <form action="admin/sua-tin-tuc/{{$editTintuc->id}}" method="post">
        @csrf
        <div class="row pt-3 ">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên tin tức</label>
                    <input type="text" name="name" class='form-control' value="{{$editTintuc->name}}">
                </div>
                <div class="form-group">
                    <label for="">Mô tả gắn</label>
                    <input type="text" name="detail" class='form-control' value="{{$editTintuc->detail}}">
                </div>

            </div>
            <div class="col-5">
                <div class="form-group">
                    <label for="">Ảnh tin tức</label>
                    <input type="file" name="image" class='form-control' value="">
                    <img  src="upload/tintuc/{{$editTintuc->image}}" alt="">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sửa</button>
        <a href="{{ route('listTintuc') }}" class="btn btn-secondary">Hủy</a>

    </form>
</div>

@endsection